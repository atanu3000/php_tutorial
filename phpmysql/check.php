<?php

include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $dob = $_POST['dob'];

    $query = "INSERT INTO `users` (`name`, `email`, `password`, `dob`) VALUES ('$name', '$email', '$pass', '$dob')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>
                alert("Submission successful!");
                window.location.replace("http://localhost/phpmysql/");
              </script>';
    } else {
        echo '<script>
                alert("Submission unsuccessful!");
                window.location.replace("http://localhost/phpmysql/");
              </script>';
    }
}

?>