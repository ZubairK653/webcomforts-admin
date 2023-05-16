<?php
include_once 'database.php';

class categoryController{

    private $categoryTable = 'tblcategories';
    public $conn;
    public $userid;
    

    public function __construct()
    {
        $db         = new DatabaseConnection;
        $this->conn = $db->conn;
           
    }
    public function saveCategory($inputData){

        $title          = $inputData['title'];
        $tagline        = $inputData['tagline'];
        $pagetags       = $inputData['tags'];
        $status         = $inputData['status'];
        $post_date 		= date("Y-m-d");
        $description    = $inputData['description'];
        $pageurl        = $inputData['pageurl'];

      $sqlQuery = "INSERT INTO $this->categoryTable (title,page_heading,page_tags,publish,post_date, short_description, page_url) 
        VALUES ('$title','$tagline','$pagetags','$status','$post_date', '$description', '$pageurl')";
       
       $result  = mysqli_query($this->conn, $sqlQuery);
       $last_id = $this->conn->insert_id;

        if($result){
            return array(true, $last_id) ;
        }else{
            return false;
        }
    }

    public function getCategory($id){
       $newcon = new DatabaseConnection();
        $sqlQuery ="
        SELECT * FROM ".$this->categoryTable." WHERE cat_id = '".$id."'" ;
        
        if($newcon->getNumRows($sqlQuery) != 0){
            $result =   $newcon->getData($sqlQuery);
            return $result;
        }
        else{
            return false;
        }  
    }

    public function getCategories(){
        $newcon = new DatabaseConnection();
         $sqlQuery ="
         SELECT * FROM ".$this->categoryTable." ORDER BY cat_id desc" ;
         
         if($newcon->getNumRows($sqlQuery) != 0){
            $result = $newcon->Run($sqlQuery);
            while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
         }
         else{
             return false;
         }  
     }

     public function updateCategory($inputData){

        $title          = $inputData['title'];
        $tagline        = $inputData['tagline'];
        $pagetags       = $inputData['tags'];
        $status         = $inputData['status'];
        $update_date 	= date("Y-m-d");
        $description    = $inputData['description'];
        $pageurl        = $inputData['pageurl'];
        $id             = $inputData['id'];

        $sqlQuery = "
        UPDATE $this->categoryTable SET
        title             = '$title',
        page_heading      = '$tagline',
        page_tags         = '$pagetags',
        publish           = '$status',
        update_date       = '$update_date',
        short_description = '$description',
        page_url          = '$pageurl' WHERE cat_id = '$id'";
        
       $result  = mysqli_query($this->conn, $sqlQuery);
       
        if($result){
            return array(true, $id) ;
        }else{
            return false;
        }
    }


}

$category = new categoryController();