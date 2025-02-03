<?php
    include("session.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
        <input type="text" name="username" required placeholder="enter your username">
        <input type="password" name="password" required placeholder="enter your username">
        <input type="submit" name="login" value="login">
    </form>

</body>
</html>

<?php
    if (isset($_POST["login"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php");
    }
    
?>