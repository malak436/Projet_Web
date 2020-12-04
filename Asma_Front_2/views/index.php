<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preview.colorlib.com/theme/medilife/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 19:37:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Login</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
       

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index-2.html"><img src="img/core-img/logo.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                              
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

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="login-page">
            <div class="form">
              
              <form class="login-form" method="POST" action="verifier.php">
                <input  name="Cin" type="text" placeholder="Cin"/>
                <input name="Pass" type="password" placeholder="Mot De Passe"/>
                
                
                <p>Choisir</p>

                <input type="radio" id="Docteur" name="type" value="Docteur">
                <label for="Docteur">Docteur</label><br>
                <input type="radio" id="Patient" name="type" value="Patient">
                <label for="Patient">Patient</label><br>




                <button name="verifier">Se Connecter</button>


              </form>
           


            </div>
          </div>    
    </section>
    <!-- ***** Hero Area End ***** -->

 
   


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

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>


<!-- Mirrored from preview.colorlib.com/theme/medilife/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 19:38:00 GMT -->
</html>