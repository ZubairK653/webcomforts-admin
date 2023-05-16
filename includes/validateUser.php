<?php
// check user
require 'userController.php';
if(isset($_POST['login']))
{
    $loginError = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

       $login = $user->loginAdmin($_POST['email'], $_POST['password']); 
      // print_r($login) ;
        if(!empty($login)) {
            $_SESSION['userid'] = $login['admin_id'];
            $_SESSION['name']   = $login['admin_name'];	

            header("Location:../index.php");

        } else {
            $loginError = "Invalid email or password!";
            
            header("Location: ../login.php?error=user");
        }
    }
    
}