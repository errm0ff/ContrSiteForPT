<?php $host = explode('?',$_SERVER['REQUEST_URI'])[0];
$num=substr_count($host, '/');
$path = explode('/', $host)[$num]; ?>
 <!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="construction is awesome bootstrap responsive construction business theme">
    <meta name="keywords" content="construction, business, construction business, responsive, parallax, business theme">
    <meta name="author" content="templateninja">
    <title>Construction</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/plugins/html5shiv.min.js"></script>
      <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home" class="home">

    <!-- begin:header -->
    <div class="header" data-parallax="scroll" data-image-src="assets/img/img-header.jpg">
  

      <!-- begin:site-navigation -->
      <div class="site-header-affix-wrapper">
        <header id="masthead" class="site-header" role="banner">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="site-branding">
                  <h1 class="site-title title-image"><a href="index-2.html" rel="home"><img src="assets/img/img-logo.png" alt="construction business" class="img-responsive"></a></h1>
                </div><!-- .site-branding -->
              </div><!-- .col-sm-3 -->

              <div class="col-sm-9">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                  <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                  <div class="menu-testing-menu-container">
                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                      <li class="menu-item current-menu-item"><a <?php if($path == ''){echo 'style="text-decoration:underline"';} ?> href="./">Home</a></li>
                      <li class="menu-item"><a <?php if($path == 'about'){echo 'style="text-decoration:underline"';} ?> href="about">About</a></li>
                      <li class="menu-item menu-item-has-children" aria-haspopup="true"><a <?php if($path == 'services'){echo 'style="text-decoration:underline"';} ?> href="services">Services</a>
                        <ul class="sub-menu">
                          <li class="menu-item current-menu-item"><a href="service.html">All Services</a></li>
                          <li class="menu-item"><a href="service-item.html">Construction Consultant</a></li>
                          <li class="menu-item"><a href="service-item.html">General Contracting</a></li>
                          <li class="menu-item"><a href="service-item.html">House Renovation</a></li>
                          <li class="menu-item"><a href="service-item.html">Construction Management</a></li>
                          <li class="menu-item"><a href="service-item.html">Design and Build</a></li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-has-children" aria-haspopup="true"><a <?php if($path == 'contact us'){echo 'style="text-decoration:underline"';} ?> href="courses">Contact us</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="single.html">Single Post</a></li>
                          <li class="menu-item"><a href="single-fullwidth.html">Single Post Full Width</a></li>
                          <li class="menu-item"><a href="page-fullwidth.html">Page Full Width</a></li>
                          <li class="menu-item"><a href="page-sidebar.html">Page With Sidebar</a></li>
                          <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Shortcodes</a>
                            <ul class="sub-menu">
                              <li class="menu-item"><a href="alert.html">Alert</a></li>
                              <li class="menu-item"><a href="progress.html">Progress Bar</a></li>
                              <li class="menu-item"><a href="social.html">Social Icon</a></li>
                              <li class="menu-item"><a href="button.html">Button &amp; Label</a></li>
                              <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                              <li class="menu-item"><a href="tab.html">Tabs</a></li>
                              <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                            </ul>
                          </li>
                          <li class="menu-item"><a href="typography.html">Typography</a></li>
                          <li class="menu-item"><a href="404.html">Not Found</a></li>
                          <li class="menu-item"><a href="comingsoon.html">Comingsoon</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="project.html">Our Projects</a></li>
                      <?php
                      if(isset($_SESSION['UserName'])){
                          echo '<li class="menu-item"><a href="logout">Logout</a></li>';
                          echo '<li class="menu-item"><a href="myProfile">My profile</a></li>';
                      }
                      else{
                          echo '<li class="menu-item"><a href="login">Login</a></li>';
                      }
                      ?>
                      
                    </ul>
                  </div>
                </nav><!-- #site-navigation -->
              </div><!-- .col-sm-9 -->
            </div><!-- .row -->
          </div><!-- .container -->
        </header><!-- #masthead -->
      </div><!-- .site-header-affix-wrapper -->
      <!-- end:site-navigation -->

      
      
      
      
<?php
if(isset($content)) echo $content;
?>


    <!-- begin:footer -->
    <footer id="colophon" class="site-footer bg-black" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <section class="widget">
              <img src="assets/img/img-logo-footer.png" alt="bootstrap theme for construction companies" class="img-responsive marg-20-btm marg-20-top">
              <p>Construction company based on Orange, California. Construction was very sufficient in maintaining the integrity of project in terms of planning, scheduling, cost and quality.</p>
            </section><!-- .widget -->
          </div><!-- .col-## -->

          <div class="col-md-2 col-sm-6 col-md-offset-1 col-sm-offset-0">
            <section class="widget">
              <h3 class="widget-title">Our Company</h3>
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Selected Work</a></li>
                <li><a href="#">Get in touch</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </section><!-- .widget -->
          </div><!-- .col-## -->

          <div class="col-md-3 col-sm-6">
            <section class="widget">
              <h3 class="widget-title">Our Services</h3>
              <ul>
                <li><a href="#">Metal Roofting</a></li>
                <li><a href="#">Green Building</a></li>
                <li><a href="#">Construction Consultant</a></li>
                <li><a href="#">Construction Management</a></li>
                <li><a href="#">General Contracting</a></li>
              </ul>
            </section><!-- .widget -->
          </div><!-- .col-## -->

          <div class="col-md-3 col-sm-6">
            <section class="widget">
              <h3 class="widget-title">Our Contact</h3>
              <p>5252 E Walnut Ave, Orange, California, United States.</p>
              <p>hello@construction.me<br>+62 (0) 274 441 5005</p>
            </section>
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </footer><!-- #colophon -->
    <!-- end:footer -->

    <!-- begin:copyright -->
    <section id="copyright" class="copyright bg-black">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 copy-left">
             <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a>. All Right Reserved.</p>
          </div><!-- .col-sm-6 -->

          <div class="col-sm-6 copy-right">
            <ul class="social-icon">
              <li><a href="#" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" target="_blank" class="icon-facebook"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="#" target="_blank" class="icon-youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" target="_blank" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div><!-- .col-sm-6 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #copyright -->
    <!-- begin:copyright -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/parallax.min.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/plugins/jquery.easing.js"></script>
    <script src="assets/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/script.min.js"></script>
  </body>

</html>
