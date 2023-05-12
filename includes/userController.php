<?php
 require 'database.php';

class adminController{

    public $conn;

    public function __construct()
    {
        $db         = new DatabaseConnection;
        $this->conn = $db->conn;
           
    }
    public $admintable = "tbladmin";

    public function getData($sqlQuery) {

		$result = mysqli_query($this->conn, $sqlQuery);

		if(!$result){
			die('Error in query: '. mysqli_error($this->conn));
		}
		
		$data = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
			
		return $data;
	}

    public function getNumRows($sqlQuery) {
		$result = mysqli_query($this->conn, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error($this->conn));
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}

    public function loginAdmin($username, $password){
        $password = md5($password);
        $sqlQuery = "
			SELECT admin_id, admin_email, admin_password, admin_username, admin_name
			FROM ".$this->admintable." WHERE admin_email='".$username."' OR admin_username ='".$username."'  AND admin_password='".$password."'";
            return  $this->getData($sqlQuery);
    }

    public function checkLogin(){
        if(empty($_SESSION['userid'])) {
			header("Location:login.php?error=session");
		}
         
    }

    public function logOut(){
    session_unset();
	session_destroy();
    }

    // admin data

    public function getUserData($loginid){
        
        $sqlQuery ="
        SELECT * FROM ".$this->admintable." WHERE admin_id = '".$loginid."'" ;
        
        if($this->getNumRows($sqlQuery) != 0){
            $result =   $this->getData($sqlQuery);
            return $result;
        }
        else{
            return false;
        }  
    }
    // public function editUser($id)
    // {
    //     $user_id  = mysqli_real_escape_string($this->conn, $id);

    //     $sqlQuery = "SELECT * FROM ".$this->admintable." WHERE admin_ id='$user_id' LIMIT 1";

    //     $result = mysqli_query($this->conn, $sqlQuery);
        
    //     if($this->getNumRows($sqlQuery) == 1){
    //        $result =   $this->getData($sqlQuery);
    //         return $result;
    //     }
    //     else{
    //         return false;
    //     }  
    // }
    public function updateUser($inputData, $id)
    {
       // echo "Hello";exit;
        $user_id    = mysqli_real_escape_string($this->conn, $id);

        $sitename       = $inputData['site_name'];
        $name           = $inputData['name'];
        $phone          = $inputData['phone'];
        $whatsapp       = $inputData['whatsapp_chat'];
        $contact_email  = $inputData['contact_email'];
        $address        = $inputData['address'];
        $site_desc      = $inputData['short_desc'];
        $copyright      = $inputData['copy_right'];
        $facebook       = $inputData['facebook'];
        $instagram      = $inputData['instagram'];
        $twitter        = $inputData['twitter'];
        $tags           = $inputData['tags'];
      
        // update query
         $sqlQuery           = "UPDATE ".$this->admintable." SET 
        admin_name          ='$name',
         site_title         = '$sitename',
         site_text          = '$site_desc',
         admin_facebook     = '$facebook',
         admin_twitter      = '$twitter',
         admin_instagram    = '$instagram',
         copyright          = '$copyright',
         admin_phone        = '$phone',
         display_phone      = '$whatsapp',
         display_email      = '$contact_email',
         admin_address      = '$address',
         site_desc          = '$site_desc',
         site_tags          = '$tags'
         WHERE admin_id     = '$user_id' LIMIT 1";
        
        $result = $this->conn->query($sqlQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

}

$user = new adminController;

class categories{

}