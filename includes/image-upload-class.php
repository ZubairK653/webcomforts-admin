<?php 
require_once 'userController.php';

class ImageUpload{
	public $conn;
	public $tableName = "tbladmin";
	
	// Class properties =================

	private $image_name; // the image name.
	private $image_type; // the image type.
	private $image_size; // the image size.
	private $image_temp; // the temporary location where the uploaded image is stored.
	private $uploads_folder = "../uploads/"; // the uploads folder.
	private $upload_max_size = 10*1024*1024; // setting the max upload file size to 2MB.

	// Next we need a property to hold an array of allowed image types.
	private $allowed_image_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];

	// And last i need a property to store any validation error.
	// I am setting the visibility of the error property to public,
	// because i want to have access to this property from the index file.
	public $error; 

	// Class methods ==============================
	
	// I need the class constructor to initialize my properties.
	// The constructor takes as an argument the $_FILES superglobal variable,
	// when we creating a new object in the html file.
	public function __construct($files, $ID){
		 //echo $ID;exit;
		$this->image_name = $files['image']['name'];
		$this->image_size = $files['image']['size'];
		$this->image_temp = $files['image']['tmp_name'];
		$this->image_type = $files['image']['type'];
		//$finaldst = "http://localhost/webcomfo-admin/uploads/";
		$ext 		      = pathinfo($this->image_name, PATHINFO_EXTENSION); 
		$picFullName      = 'wc_'.$this->image_name;
		$this->image_name = $picFullName;
		$this->isImage();
		$this->imageNameValidation();
		$this->sizeValidation();
		$this->checkFile();
		//$this->resize_imagejpg($picFullName,400, 400, $finaldst);
		
		//  check if the error property has no errors stored,
		// and then call the moveFile method.
		if($this->error == null){
			$this->moveFile();
		}
		if($this->error == null){ 
			$this->recordImage($ID);
		}
	}

	// First the method will check if the uploaded file is indeed an image.
	// And second the method will validate if the uploaded file type is included
	// in the $allowed_image_types array.
	private function isImage(){
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$mime = finfo_file($finfo, $this->image_temp);
		if(!in_array($mime, $this->allowed_image_types)){
			return $this->error = "Only [ .jpg, .jpeg, .png, and .gif ] files are allowed";
		}
		finfo_close($finfo);
	}


	// validate the image's name.
	// The method will return the sanitized image name, so we are
	// sure that it is safe to store the name in the database.
	private function imageNameValidation(){
		return $this->image_name = filter_var($this->image_name, FILTER_UNSAFE_RAW);
	}


	// validate the max upload size.
	// The method will return an error if the file's size exceeds
	// the 2MB size limit.
	private function sizeValidation(){
		if($this->image_size > $this->upload_max_size){
			return $this->error = "File is bigger than 2MB";
		}
	}


	// check if the file already exists in the folder.
	// The method will return an error if the file exists.
	private function checkFile(){
		if(file_exists($this->uploads_folder.$this->image_name)){
			//echo "exist image";exit;
			return $this->error = "File already exists in folder";
			//unlink($this->image_name);
		}
	}

	 
	 
	// move the file from the temporary storage to our
	// uploads folder.
	// When we uploading a file, php is storing that file to a temporary
	// location in the server. Then we have to move the file to our uploads folder.
	private function moveFile(){
		// use move_uploaded_file function to move the file
		// from the temporary location to my uploads folder.
		if(!move_uploaded_file($this->image_temp, $this->uploads_folder.$this->image_name)){
			return $this->error = "There was an error, please try again";
		}
	}


	// method to store the image name to the database.
	private function recordImage($ID){
		// db connection
		$db         = new DatabaseConnection;
        $this->conn = $db->conn;

		// Next update the image in db.
		 $sqlQuery = "UPDATE ". $this->tableName." SET admin_photo = '$this->image_name'  WHERE admin_id = $ID";
		$result    = mysqli_query($this->conn, $sqlQuery);
		 
		//  check the affected_rows property to see if the query
		// was successful.
		if($this->conn->affected_rows != 1){
			// If something went wrong and the image name was not inserted in the
			// database,  remove the uploaded file from the folder.
			if(file_exists($this->uploads_folder.$this->image_name)){
				unlink($this->uploads_folder.$this->image_name);
			}
			// And return an error message.
			return $this->error = "There was an error, please try again.";
		}
	}



}