<?php 
	require_once 'class.php';
	if(ISSET($_POST['update'])){	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
		$id = $_POST['id'];
		$conn = new db_class();
		$conn->update($firstname, $lastname, $email, $phone, $message, $id);
		header('location: orders-list.php');
        
	}	
?>