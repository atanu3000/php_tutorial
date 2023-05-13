<?php 

$connect = mysqli_connect("localhost", "root", "", "atanu_form");

$name = $_POST['name'];
echo $name;
echo "<br>";

$email = $_POST['email'];
echo $email;
echo "<br>";

$gender = $_POST['gender'];
echo $gender;
echo "<br>";

$location = $_POST['location'];
echo $location;
echo "<br>";

$row = "INSERT student SET name='$name', email='$email',  gender='$gender', location='$location'";
$connect->query($row);

?>