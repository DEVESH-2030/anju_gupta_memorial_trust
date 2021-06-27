
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Anju Gupta Memorial Trust</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/bootstrap.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/font-awesome.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">	
  <link href="lib/lightbox/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
   <link href="css/responsive.css" rel="stylesheet">
	
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146666856-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146666856-1');
</script>
	
	
<!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdY-dMUAAAAAMpxiyO5Y3Bi5r74sYejdbHed66S"></script> -->
<!--   <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdY-dMUAAAAAMpxiyO5Y3Bi5r74sYejdbHed66S', {action: 'homepage'}).then(function(token) {
        // pass the token to the backend script for verification
        $('#contact-form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                    
      });
  });
  </script>	 -->
	
<style>
	.modal-body > p { font-size: 0.9em; }
	.modal-body > ul li { font-size: 0.9em; line-height: 1.7em; }

/*		#nav-menu-container ul > li > a > i { font-size: 1.3em !important}*/

	#nav-menu-container i { background-color: #000; padding: 0.5em; border-radius: 0%; font-size: 1.1em; margin-right:-1em;  }

	.animated-professor { /*position: fixed; bottom: 0; right: 0; z-index: 999;*/ width: 300px; height: auto; }

	#HomepageModal { margin-top: 5vh;}
	
	@media (min-width: 992px) {
		.modal-lg { max-width: 600px !important; }
	}
</style>	

	
	
<!--- POP UP WINDOW CSS AND JS STARTS HERE --->		
		
<style type="text/css">
	.modal-newsletter {	
		color: #999;
		width: 1000px;
		font-size: 15px;
	}
	.modal-newsletter .modal-content {
		padding: 30px;
		border-radius: 0;		
		border: none;
	}
	.modal-newsletter .modal-header {
		border-bottom: none;   
        position: relative;
		border-radius: 0;
	}
	.modal-newsletter h4 {
		font-family: 'Lato', sans-serif;
		color: #000;
		font-size: 20px;
		margin: 0;
		font-weight: bold;
	}
	.modal-newsletter .close {
		position: absolute;
		top: -15px;
		right: -15px;
		text-shadow: none;
		opacity: 0.3;
		font-size: 24px;
	}
	.modal-newsletter .close:hover {
		opacity: 0.8;
	}
	.modal-newsletter .icon-box {
		color: #7265ea;		
		display: inline-block;
		z-index: 9;
		text-align: center;
		position: relative;
		margin-bottom: 10px;
	}
	.modal-newsletter .icon-box i {
		font-size: 110px;
	}
	.modal-newsletter .form-control, .modal-newsletter .btn {
		min-height: 46px;
		border-radius: 0;
	}
	.modal-newsletter .form-control {
		box-shadow: none;
		border-color: #dbdbdb;
	}
	.modal-newsletter .form-control:focus {
		border-color: #f95858;
		box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
	}
    .modal-newsletter .btn {
        color: #fff;
		background: #f95858;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		padding: 6px 20px;
		min-width: 150px;
		margin-left: 6px !important;
        border: none;
    }
	.modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
		box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
		background: #f72222;
		outline: none;
	}
	.modal-newsletter .input-group {
		margin-top: 30px;
	}
	.hint-text {
		margin: 100px auto;
		text-align: center;
	}
	
	
</style>


<!--- POP UP WINDOW CSS AND JS ENDS HERE --->
	

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto d-block"><h1><img src="img/small-logo.png"><span>Anju Gupta Memorial Trust</span></h1></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
			
          <li class="menu-has-children"><a href="javascript:void(0);">About</a>
            <ul>
              <li><a href="about-us.php">The Trust</a></li>			
              <li><a href="index.php#Trustees">Trustees</a></li>			
            </ul>
          </li>

          <li><a href="issues.php">Issues</a></li>
			
			
		<!--    

		<li><a href="#about">About</a></li>

		<li><a href="Awards.html">Awards</a></li>
			
          <li><a href="#about">Vision & Mision</a></li>
          <li><a href="#services">Objectives</a></li>
			
			
          <li class="menu-has-children"><a href="">Members</a>
            <ul>
              <li><a href="#Trustees">Trustees</a></li>
              <li><a href="#portfolio">Board of Governors</a></li>
            </ul>
          </li>

		-->
			
		<li><a href="testimonial.php">Testimonials</a></li>			

			
          <li class="menu-has-children"><a href="javascript:void(0);">Events</a>
            <ul>
				<li><a href="upcoming-events.php">Upcoming Events</a></li>
				<li><a href="past-events.php">Past Events</a></li>		
				<!-- <li><a href="javascript:void(0);" target="_blank">Registration</a></li> -->
            </ul>
          </li>

		  
          <li class="menu-has-children"><a href="javascript:void(0);">Media</a>
            <ul>
            <!--   <li><a href="javascript:void(0);">Press and Media</a></li> -->
              <li><a href="photo-gallery.php">Photo Gallery</a></li>
             <!--  <li><a href="javascript:void(0);">Video Gallery</a></li> -->
            </ul>
          </li>
						
          <!-- <li class="menu-has-children"><a href="">GreeKNOW</a>
            <ul>
				<li><a href="javascript:void(0);">Living Building Series</a></li>
				<li><a href="javascript:void(0);">LBS Video Archives</a></li>
				<li><a href="javascript:void(0);">The Colloquium</a></li>
				<li><a href="javascript:void(0);">Ask Your Questions</a></li>		
            </ul>
          </li> -->
		<li><a href="contact.php">Contact</a></li>
          
          <li>
          	<a href="donate-now.php" class="donate-btn d-md-block display-sm-none">Donate Now
            </a>
         </li>
			
			
			
		<!-- <li><a href="javascript:void(0);" class="facebook" target="_blank">
			<i class="fa fa-facebook"></i></a>
		</li>
		<li><a href="javascript:void(0);" class="linkedin" target="_blank">
			<i class="fa fa-linkedin"></i></a>
		</li>
		<li><a href="javascript:void(0);" class="youtube" target="_blank">
			<i class="fa fa-youtube"></i></a>
		</li>	
		<li><a href="javascript:void(0);" class="instagram" target="_blank">
			<i class="fa fa-instagram"></i></a>
		</li> -->				


        </ul>
      </nav><!-- #nav-menu-container -->
      <a href="donate-now.php" class="donate-btn display-md-none responsive-btn">Donate Now
            </a>
    </div>
  </header>
	<!-- #header -->



