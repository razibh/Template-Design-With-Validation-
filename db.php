<?php
$conn= new mysqli('localhost','root','','task1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>