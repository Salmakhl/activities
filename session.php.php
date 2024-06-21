<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bonjour</h1><br><br><br>
    <?php
session_start();
if (isset($_SESSION["info"])) {
    $nom = $_SESSION["info"];
    echo $nom;
} else {
    echo "No session data found.";
}
?>

</body>
</html>