<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Questions_PHP_Form</title>
</head>
<body>
    <?php include "./nav.php" ?>
    <main>
        <h1>Exo 1.2</h1>
        <?php
            $currentTime = date("H:i");
            $amOrPm = date("a");
            $text = "Il est " . $currentTime . ". </u> ";
            $greeting = "Bon matin ! ";

            if ($amOrPm == "pm") {
                $greeting = "Bonne après midi ! ";
            }

            echo "<p class='success'>" . $text . $greeting . "</p>";
        ?>
    </main>
</body>
</html>