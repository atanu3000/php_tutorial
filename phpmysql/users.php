<?php

include('config.php');

$query = "SELECT * FROM `users` ORDER BY `id`";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <a href="index.php">Add New User</a>
    <h1>List of Users:</h1>
    <?php if (mysqli_num_rows($result) > 0) { ?>
       <?php foreach ($row as $user) { ?>
            <div>
                <h3>Name: <?php echo $user['name']; ?></h3>
                <p>Email: <?php echo $user['email']; ?></p>
                <p>D-O-B: <?php echo date("F d, Y", strtotime($user['dob'])); ?></p>
            </div>
       <?php } ?>
    <?php } else { ?>
        <p>No users to show!</p>
    <?php } ?>
</body>

</html>