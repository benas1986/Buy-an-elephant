<?php
	require 'config.php';
	
	class db_class extends db_connect{	
		
		public function __construct(){
			$this->connect();
		}
		
		public function create($firstname, $lastname, $email, $phone, $message){
			$stmt = $this->conn->prepare("INSERT INTO `member` (`firstname`, `lastname`, `email`, `phone`, `message`, `date`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$message', NOW())") or die($this->conn->error);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `member` ORDER BY `id` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$stmt->close();
				$this->conn->close();
				return $result;
			}
		}
		
		public function member_id($id){
			$stmt = $this->conn->prepare("SELECT * FROM `member` WHERE `id` = '$id'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				$stmt->close();
				$this->conn->close();
				return $fetch;
			}
		}
		
		public function delete($id){
			$stmt = $this->conn->prepare("DELETE FROM `member` WHERE `id` = '$id'") or die($this->conn->error);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		
		public function update($firstname, $lastname, $email, $phone, $message, $id){
			$stmt = $this->conn->prepare("UPDATE `member` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `phone` = '$phone',`message` = '$message' WHERE `id` = '$id'") or die($this->conn->error);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
 	}	
?>