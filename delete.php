<?php
include 'dbh.php';
$id = $_GET["id"];
$deletequery = "delete from blog where id='$id'";
$query = mysqli_query($conn, $deletequery);
header('location:blog.php');
?>