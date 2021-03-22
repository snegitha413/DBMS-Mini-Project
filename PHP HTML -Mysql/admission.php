<?php
// database connection code

$con = mysqli_connect("localhost", "root","","project");

// get the post records
$application_id = $_POST['Application_id'];
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$mail = $_POST['mail'];
$phone_num = $_POST['phone_num'];
$gender;
// database insert SQL code
if(isset($_POST['Male']))
{
	$gender = "Male";
}
elseif(isset($_POST['Female']))
{
	$gender = "Female";
}
$sql = "INSERT INTO `admission` (`Application_id`, `First_name`, `Last_name`, `mail`, `gender`, `phone_num`) VALUES ('$application_id', '$First_name', '$Last_name', '$mail', '$gender', '$phone_num')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Inserted";
	
}

?>