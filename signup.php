<?php   
    include_once 'dbh.php';

    $blogname = $_POST['blogname'];
    $blogimage  = $_POST['blogimage'];
    $blogdescription = $_POST['blogdescription'];
    


    $sql = "INSERT INTO blog (blog_name,blog_image,blog_description) VALUES ('$blogname','$blogimage ','$blogdescription');";
    mysqli_query($conn, $sql);

    header("Location: blog.php?BlogPOST=success");
?>