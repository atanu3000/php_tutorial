<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <!-- <h1>Hello, world!</h1> -->

  <div class="container mt-5">
    <h1 class="text-center my-5">Dash Board</h1>
    <table class="table table-striped">
      <thead class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Location</th>
        <th>Language</th>
        <th>Delete</th>
      </thead>
      <tbody>
        <?php

        $connect = mysqli_connect("localhost", "root", "", "atanu_form");
        $row = "SELECT * FROM student";
        $res = $connect->query($row);
        while ($line = $res->fetch_assoc()) { ?>
          <tr>
            <td>
              <?php echo $line['id'] ?>
            </td>
            <td>
              <?php echo $line['name'] ?>
            </td>
            <td>
              <?php echo $line['email'] ?>
            </td>
            <td>
              <?php echo $line['gender'] ?>
            </td>
            <td>
              <?php echo $line['location'] ?>
            </td>
            <td>
              <?php echo $line['language'] ?>
            </td>
            <td><a href="delete.php?id=<?php echo $line['id']; ?>" class="btn btn-danger"
                onclick="return confirm('Are you sure?')"><ion-icon name="trash-outline"></ion-icon></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="mx-auto" style="width: max-content;"><a href="form.html" class="btn btn-primary mx-5 mt-5">Add More</a></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>