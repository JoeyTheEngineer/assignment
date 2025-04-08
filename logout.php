<?php
session_destroy();
session_unset();
unset($_SESSION['email']);
header("location: login6.php");
?>