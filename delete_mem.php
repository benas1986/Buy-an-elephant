<?php
	require_once 'class.php';
	$id = $_REQUEST['id'];
	$conn = new db_class();
	$conn->delete($id);
	header('location:orders-list.php');
?>