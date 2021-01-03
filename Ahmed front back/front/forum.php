

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Venus Curae| Associations </title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="medilife-load"></div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="h-100 d-md-flex justify-content-between align-items-center">
                        <p><font color="cornflowerblue">Bienvenus dans le monde <span>Venus Curae</span></font> </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="index-2.php"><img src="img/core-img/logo.png" alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="medilifeMenu">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index-2.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index-2.php">Home</a>
                                            <a class="dropdown-item" href="about-us.html">About Us</a>
                                            <a class="dropdown-item" href="association_page.php">Associations</a>
                                            <a class="dropdown-item" href="centre.php">Centres</a>
                                            <a class="dropdown-item" href="forum.php">Forum</a>
                                            <a class="dropdown-item" href="blog.html">News</a>
                                            <a class="dropdown-item" href="single-blog.html">News Details</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="index-icons.html">All Icons</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-us.html">About Us</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="association_page.php">Associations</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="centre.php">Centres</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="forum.php">Forum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                                <!-- Appointment Button -->

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Nos Associations </h3>
                    <p> <i> <strong> Nous sommes toujours à votre entière disposition pour vous</strong> </i></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->


<div class="medilife-services-area section-padding-100-20">
    <div class="container">
        <div class="row">
            <!-- Single Service Area -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="card-block">
                            <h4> <font color="cornflowerblue">Espace de discussion publique pour toute question</font></h4>
                            <div>
                                <a href="post.php" class="btn-get-started scrollto"> <h4> <u> <font color="plum">Posez vos  questions </font> </u> </h4></a>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            <div class="breadcrumbs-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-18">
                            <div class="breadcrumb-content text-center">
                                <?php
                                include_once '../front_malak/ForumM.php';
                                $post=new ForumManage();
                                $posts=$post->afficherPost();
                                ?>

                                <div class="shop-main-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <!-- blog-total-area-start -->
                                                <div class="blog-total-area mb-40-3">
                                                    <h5> <u><font color="plum">Liste de postes</font></u></h5>
                                                    <div class="row" align="center">

                                                        <?php foreach ($posts as $row) { ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                                                <!-- single-blog-2-start -->
                                                                <div class="single-blog single-blog-2 mb-30">
                                                                    <div class="blog-2-img">
                                                                        <!-- <a href="blog-details.html"><img src="<?php //echo $row['image']; ?>" alt="man" /></a>-->
                                                                    </div>
                                                                    <div class="blog-2-content blog-content">
                                                                        <?php
                                                                        $timeadd=$row['date_post'];
                                                                        $date1 = date('Y-m-d',strtotime($timeadd));
                                                                        $time1 = date('H:i',strtotime($timeadd));
                                                                        $date1 = explode('-', $date1);
                                                                        $year = $date1[0];
                                                                        $month   = $date1[1];
                                                                        $day  = $date1[2];
                                                                        $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
                                                                        <span><?php echo $monthName." ".$day.", ".$year; ?></span>
                                                                        <h3><a href="forum-detail.php?id=<?php echo$row['id']; ?>"><?php echo $row['titre']; ?></a></h3>

                                                                        <p><?php
                                                                            $text=$row['post'];
                                                                            $text1=substr($text, 0, 200);
                                                                            echo $text1; ?></p>
                                                                        <a href="forum-detail.php?id=<?php echo $row['id']; ?>">Lire Plus ...</a>
                                                                    </div>
                                                                </div>
                                                                <!-- single-blog-2-end -->
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <!-- blog-total-area-end -->
                                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            </div>

        </div>
</div>
<!-- ***** Footer Area Start ***** -->
<br>
<footer class="footer-area section-padding-100">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="footer-logo">
                            <h1><strong> <font color="lavender" >Venus Curae</font></strong></h1>
                        </div>

                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6><font color="lavender">Derniers INFOS</font></h6>
                        </div>
                        <div class="widget-blog-post">
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln1.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">Tout savoir sur le cycle menstruel </a>
                                    <p>Dec 02, 2020</p>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln2.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">Pillule, fertilité une fatalité</a>
                                    <p>Dec 02, 2020</p>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="widget-single-blog-post d-flex">
                                <div class="widget-post-thumbnail">
                                    <img src="img/blog-img/ln3.jpg" alt="">
                                </div>
                                <div class="widget-post-content">
                                    <a href="#">La coupe menstruelle comment ça marche?</a>
                                    <p>Dec 02, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6><font color="lavender">Contactez nous</font></h6>
                        </div>
                        <div class="footer-contact-form">
                            <form action="#" method="post">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email">
                                <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6><font color="lavender">Nouveau message</font></h6>
                        </div>

                        <div class="footer-newsletter-area">
                            <form action="#">
                                <input type="email" class="form-control border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here">
                                <button type="submit">Souscrire</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>
</html>