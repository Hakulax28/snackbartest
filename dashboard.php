<?php

session_start();

if (!$_SESSION["isLoggedIn"]) {
    echo "Deze gebruiker mag hier niet komen";
}

echo "Je bent op de dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack'in Sea</title>
</head>

<body>
    <header>
        <p>Test</p>
    </header>
    <div class="main">
        Test
        <div>

        </div>
    </div>
    <footer>

    </footer>
</body>

</html>