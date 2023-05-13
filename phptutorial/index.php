<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .container {
            width: 400px;
            border: 1px solid #ccc;
            padding: 0 20px;
        }
    </style>
</head>

<body>
    <?php
    // Echo Statement
    echo "<h1>Hello, World!</h1>";
    echo "<hr/>";
    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio temporibus laboriosam et consequatur, voluptates incidunt soluta recusandae quam accusantium ratione iste quos dolor pariatur sed eaque rerum labore odio cum voluptas fugiat praesentium vero! Impedit suscipit, architecto numquam unde culpa ab harum dolores atque similique, sapiente quidem quos ducimus molestias.</p>";

    // Variables
    $name = 'Atanu'; // String
    $age = 20; // Number
    echo $name . " is " . $age . " years old."; // Concatenation
    
    echo "<br/><br/>";

    // String Operations
    $words = "Chirag Chakraborty";
    echo strtolower($words) . "<br/>"; // Lower Case
    echo md5($words) . "<br/>"; // Hashing
    echo strpos($words, "Chakraborty") . "<br/>"; // Starting Position
    
    // If-Else
    if ($age < 18) {
        echo "You are not an adult!<br/>";
    } else {
        echo "You are an adult!<br/>";
    }

    // For Loop
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br/>";
    }

    // Array
    $superheroes = array("Spider-Man", "Superman", "Batman", "Wonder Woman", "Wolverine");
    print_r($superheroes); // Printing an Array
    // Foreach Loop
    foreach ($superheroes as $superhero):
        echo "<br/>" . $superhero;
    endforeach;
    ?>

    <?php if ($name == "Chirag") { ?>
        <div class="container">
            <p>Chirag</p>
        </div>
    <?php } else { ?>
        <div class="container">
            <p>
                <?php echo $name; ?>
            </p>
        </div>
    <?php } ?>

    <form action="greet.php" method="POST">
        <input type="text" name="name" placeholder="Enter your name...">
        <button type="submit">Submit</button>
    </form>
</body>

</html>