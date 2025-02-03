
<?php
    include("session.php");
    if (isset($_SESSION["username"])) {
        echo "hello " . $_SESSION["username"];
        include("logout.html");
    }
?>