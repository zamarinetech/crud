<?php
require_once('config.php');
require_once('Controller.php');

$id = $_GET['id'];
	
$delete = Controller::delete_data($id);

if ($delete == true) {
	echo "<script>alert('Delete');</script>";
	header("Location: index.php");
}else{
	echo "failed";
} 
?>