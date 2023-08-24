<?php
require 'db.php';
$sql ="SELECT * FROM form";
$query = mysqli_query($conn,$sql);
while ($show=mysqli_fetch_assoc($query)){
$imgshow=$show['img'];
echo "<img src ='form/$imgshow'>";
echo $imgshow;
}
?>