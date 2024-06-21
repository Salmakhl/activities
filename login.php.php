<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="login">Login :</label>
        <input type="text" name="login" required><br><br>

        <label for="ps">Password :</label>
        <input type="password" name="ps" id="ps" ><br><br>

        <button type="submit" name="ok">okkkkkk</button>
    </form>

    <?php
    if (isset($_GET["ok"])) {
        session_start();
        $_SESSION["info"] = $_GET["login"];
        header("Location: datec.php");
        exit();
    }
    ?>
</body>
</html>
