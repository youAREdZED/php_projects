
<?php
    include("session.php");
    if(isset($_POST["logoutuser"])){
        session_destroy();
        header("Location: login.php");
    }

?>