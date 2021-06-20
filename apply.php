<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connect.php';
$full_name=mysqli_real_escape_string($conn, $_POST['full_name']);
$email=mysqli_real_escape_string($conn, $_POST['email']); 
$department=mysqli_real_escape_string($conn,$_POST['department']);
$session=mysqli_real_escape_string($conn, $_POST['session']); 
$start=mysqli_real_escape_string($conn,$_POST['start']);
$finish=mysqli_real_escape_string($conn,$_POST['finish']);
$venue=mysqli_real_escape_string($conn,$_POST['venue']);

$sql="INSERT INTO `registration`(`full_name`, `email`, `department`, `session`, `start`,`finish`, `venue`) VALUES ('$full_name','$email','$department','$session','$start','$finish','$venue')";
$result=mysqli_query($conn,$sql);

if ($result)
echo "Success!";
else{
    echo "Failed";
    echo mysqli_error($conn);
}

?>