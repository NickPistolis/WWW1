<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="hhttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<meta charset="utf-8">
<?php
    session_start();
    $_SESSION['loggedIn'] = false;
    header("Location: index.php");
?>