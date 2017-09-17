<?php 
require_once 'class.php';

if(isset($_POST['create'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $conn = new db_class();
    $conn->create($firstname, $lastname, $email, $phone, $message);
    header('location: orders-list.php');
}  
?>



