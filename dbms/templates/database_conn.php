<?php $conn = mysqli_connect('localhost','banking_website','abcd','arshdeepbank');

if(!$conn){
	 echo 'connection error: ' . mysqli_connect_error();
}
?>