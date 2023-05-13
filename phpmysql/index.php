<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
  <h1>PHP + MySQL</h1>
  <a href="users.php">Show Users</a>
  <br>
  <br>
  <form action="check.php" method="POST">
    <input type="text" placeholder="Enter your name" name="name" />
    <input type="email" placeholder="Enter your email" name="email" />
    <input type="password" placeholder="Choose a strong password" name="password" />
    <input type="date" name="dob" />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>