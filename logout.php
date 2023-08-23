<?php

require 'db.php';

session_unset();
session_destroy();

header("location:login.php");
echo '<script>alert("LogOut Successfully")</script>';
?>
