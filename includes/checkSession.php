<?php 
class checkSession{
    public function __construct(){
            if(empty($_SESSION['userid'])) {
                header("Location:login.php?error=session");
            }
            
        }
}

new checkSession();

$userid = $_SESSION['userid'];
  
 $userrow =  $user->getUserData($userid);