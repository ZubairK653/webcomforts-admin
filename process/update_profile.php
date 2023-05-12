<?php
// check session
require '../includes/checkSession.php';
require("includes/image-upload-class.php");
$db         = new DatabaseConnection;
$conn       = $db->conn;

$bcheck = mysqli_real_escape_string($db->conn, $_POST['bcheck']);

if(isset($_POST['update_profile']) && $bcheck =="true"){
    echo "hello";

    //$id = mysqli_real_escape_string($db->conn,$_POST['user_id']);

    echo $id  = $db->protectData($_POST['user_id']);exit;
}