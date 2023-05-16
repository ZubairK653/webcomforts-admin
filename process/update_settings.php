<?php
// 
require_once '../includes/include.php';

$db         = new DatabaseConnection;
$conn       = $db->conn;

$bcheck = mysqli_real_escape_string($db->conn,$_POST['bcheck']);

if($bcheck == true){
 
     $id = mysqli_real_escape_string($db->conn,$_POST['user_id']);

    $inputData = [
        'site_name'         => mysqli_real_escape_string($db->conn,$_POST['site_name']),
        'name'              => mysqli_real_escape_string($db->conn,$_POST['name']),
        'phone'             => mysqli_real_escape_string($db->conn,$_POST['phone']),
        'whatsapp_chat'     => mysqli_real_escape_string($db->conn,$_POST['whatsapp_chat']),
        'contact_email'     => mysqli_real_escape_string($db->conn,$_POST['contact_email']),
        'address'           => mysqli_real_escape_string($db->conn,$_POST['address']),
        'short_desc'        => mysqli_real_escape_string($db->conn,$_POST['short_desc']),
        'copy_right'        => mysqli_real_escape_string($db->conn,$_POST['copy_right']),
        'facebook'          => mysqli_real_escape_string($db->conn,$_POST['facebook_link']),
        'instagram'         => mysqli_real_escape_string($db->conn,$_POST['instagram_link']),
        'twitter'           => mysqli_real_escape_string($db->conn,$_POST['twitter_link']),
        'tags'              => mysqli_real_escape_string($db->conn,$_POST['tags']),
    ];
     
    $result = $user->updateUser($inputData, $id);
    if($result = true){
        header("Location: ../settings.php?msg=success");
    }
    else{
        header("Location: ../settings.php?error=not-updated");
    }  

}