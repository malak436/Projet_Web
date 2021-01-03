<?php
include_once 'dbh.php';

$blogid = $_POST['blogid'];
$blogname = $_POST['blogname'];
$blogimage  = $_POST['blogimage'];
$blogdescription = $_POST['blogdescription'];


$sql = "UPDATE blog SET blog_name='$blogname', blog_image='$blogimage',blog_description='$blogdescription' WHERE id='$blogid';";
mysqli_query($conn, $sql);

header("Location: blog.php?BlogPOST=success");
