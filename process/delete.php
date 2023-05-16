<?php
// 
require_once '../includes/include.php';
require_once '../includes/categoryController.php';

$categoryTable = 'tblcategories';

$db         = new DatabaseConnection;
$conn       = $db->conn;

$id = $db->protectData($_POST['id']);

echo $sqlQuery = "
DELETE FROM ".$categoryTable." WHERE cat_id = ".$id." LIMIT 1";

$result = mysqli_query($db->conn, $sqlQuery);

 echo $result;
 