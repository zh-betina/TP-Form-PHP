<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $areParamsSet = isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["sexe"]) && isset($_POST["vins"]);

    if ($areParamsSet) {
        $response = "Les données ont étaient traitées ! Merci !";
    } else {
        $reponseIsDataPosted = "Les données ont étaient envoyées, mais elles sont vides";
    }
}
?>

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
        <h1>Exo 1.5</h1>
        <?php

        if (isset($reponseIsDataPosted)) {
            echo "<p class='err hidden'>";
            echo $reponseIsDataPosted;
            echo "</p>";
        };

        if (isset($response)) {
            echo "<p class='success'>";
            echo $response;
            echo "</p>";
            echo "<button><a href='./1.6.php'>Retour</a></button>";
        } else {
            echo '<form class="simple-form" action="./1.6.php" method="POST">';
            include "./form.php";
            echo '</form>';
        }
        ?>
    </main>
</body>

</html>