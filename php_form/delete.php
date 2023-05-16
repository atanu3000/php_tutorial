<?php  

$connect = mysqli_connect("localhost", "root", "", "atanu_form");
$id = $_GET['id'];

$del = "DELETE FROM student WHERE id='$id'";


$connect->query($del);

header("location: listening.php");

?>