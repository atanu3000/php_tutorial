<?php 

$connect = mysqli_connect("localhost", "root", "", "atanu_form");

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$location = $_POST['location'];

// echo $name; // printing data
// echo "<br>";

// echo $email;
// echo "<br>";

// echo $gender;
// echo "<br>";

// echo $location;
// echo "<br>";

$s = "";

if(isset($_POST['lan'])) {
    $s = implode(",",$_POST['lan']);
   echo $s;
}

$row = "INSERT INTO student SET name='$name', email='$email',  gender='$gender', location='$location',language='$s'";
$connect->query($row);

header("location: listening.php");
?>