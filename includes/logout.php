<?php
require 'userController.php';

if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	$user->logOut();
	header("Location:../login.php?logout=true");
}