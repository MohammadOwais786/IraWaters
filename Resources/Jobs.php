<!DOCTYPE html>

<?php
require 'global_vars.php';
	$con = connect_2_db();
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mailid = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$msg = "Dear, ";
	$file = $_FILES['file']['name'];	
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 if($file_type!="application/pdf"){
   echo '<script>
 alert("Please upload Pdf Only");
 window.location = "Jobs.php"
 </script>';
 sleep(10);
 die();
 }
 $folder="./Uploads/";
 if(move_uploaded_file($file_loc,$folder.$file))
        {
			// require '../phpmailer/PHPMailerAutoload.php';
			// $mail=new PHPMailer;

			// $mail->isSMTP();
			// $mail->Host = 'smtp.gmail.com';
			// $mail->Port = 25;
			// $mail->SMTPSecure = 'tls';
			// $mail->SMTPAuth = true;
			// $mail->Username = "f2014942@hyderabad.bits-pilani.ac.in";
			// $mail->Password = "117358";
			// $mail->setFrom('f2014942@hyderabad.bits-pilani.ac.in','Auto Mail');
			// $mail->addAddress('byrisettihemu@gmail.com','Application'); //This sends a mail to the faculty
			// $mail->Subject ='Resume for '.$subject.'.';
			// $mail->Body=$msg;
			// if(!$mail->send())
			// {
			// 	//echo "Mailer error: ".$mail->ErrorInfo;
			// 	$status="NO";
			// }
			// else
			// 	$status="YES";
			$status="YES";
	if($status == "YES")
	{
mysqli_query($con, "INSERT INTO resume (name, email, subject, message, file) VALUES('$name', '$mailid', '$subject', '$message', '$file')");
      echo '<script>
    alert("Uploaded successfully");
    window.location = "Jobs.php"
    </script>';
	}
	else
	{
      echo '<script>
    alert("Error occurred while uploading. Please try after some time.");
    window.location = "Jobs.php"
    </script>';
	}
	}
 	else
        {
            ?><script>alert('error while uploading file');</script><?php
        }
}

?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IraWater</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="rainwater harvesting, rainwater collection, rainwater filteration, water conservation, how to save water, how to conserve water, ways to conserve water, ways to save water, groundwater, groundwater extraction, rainwater harvest, water harvest, storm harvest, rain harvest, water table, water table, importance of water, water supply, water management, water service, water sources, Drinkwater, water saving aerators, neoperl in india, water testing, water test lab" />
    <meta name="author" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/services/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/styleAbout.css">
    <link rel="stylesheet" href="../css/styleHonest.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleServices.css">
    <!-- google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="gtco-loader"></div>
    <div id="page">

        <div class="page-inner">
            <div id="head-top" style="position: absolute; width: 100%; top: 0; ">
                <div class="gtco-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div id="gtco-logo">
                                    <a href="../index.html">
                                        <div id="gtco-logo"><a href="../index.html"><img src="../images/logo.png" alt="Partners" class="img-responsive" style="height:65px"></a></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 social-icons">
                                <ul class="gtco-social-top">
                                    <li><a href="#"><i class="icon-phone" style="padding-right:10px"></i>+91 777 606 3322</a></li>
                                    <li><a href="../#"><i class="icon-mail2" style="padding-right:10px"></i>info@irawater.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="gtco-nav sticky-banner" role="navigation">
                    <div class="gtco-container">
                        <div class="row">
                            <div class="col-xs-12 text-center menu-1">
                                <ul>
                                    <li><a href="../index.html">Home</a></li>
                                    <li class="has-dropdown">
                                        <a href="#">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="../about.html#WhoWeAre">Who we are?</a></li>
                                            <li><a href="../#gtco-team">Our Team</a></li>
                                            <li><a href="../about.html#why-ira">Why Ira?</a></li>
                                            <li><a href="../about.html">Company Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="../Services/Rainwater-Harvesting.html">Rainwater Harvesting</a></li>
                                            <li><a href="../Services/Water-Saving-Aerators.html">Water Saving Aerators</a></li>
                                            <li><a href="../Services/Rainwater-Filters.html">Rainwater Filters</a></li>
                                            <li><a href="../Services/Groundwater-Mapping.html">Groundwater Mapping</a></li>
                                            <li><a href="../Services/Water-Sample-Testing.html">Water Sample Testing</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Clients</a>
                                        <ul class="dropdown">
                                            <li><a href="../index.html#clients">Client Logos</a></li>
                                            <li><a href="../index.html#testimonials">Testimonials</a></li>
                                            <li><a href="#">Customer Stories</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="../index.html#Social-Good">Social Good</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown active">
                                        <a href="#">Resources</a>
                                        <ul class="dropdown">
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="social.html">Social</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Jobs</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="gtco-header" data-section="home" class="gtco-cover gtco-cover-sm header-fixed " role="banner" style="background-image:url('../images/wideImages/jobs.jpg');">
                <div class="overlay"></div>
                <div class="gtco-container">
                    <div class="row row-mt-15em">
                        <div class="col-md-12 mt-text text-center " data-animate-effect="fadeInUp">
                            <h1><strong>Jobs</strong></h1>
                            <h2>Do you want to grow professionally by making a difference socially?</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gtco-section border-bottom" id="how-it-works" data-section="how-it-works">
                <div class="gtco-container">
                    <div class="row">
                        <div class=" col-md-12 col-md-offset-0 text-center service-heading">
                            <h2 >Job Openings</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="feature-left">
                                        <span class="icon">
                                            <i class="icon-feather"></i>
                                        </span>
                                        <div class="feature-copy">
                                            <h3>Internship - MBA</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="feature-left">
                                        <span class="icon">
                                            <i class="icon-feather"></i>
                                        </span>
                                        <div class="feature-copy">
                                            <h3>Research Engineer</h3>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="feature-left">
                                        <span class="icon">
                                            <i class="icon-feather"></i>
                                        </span>
                                        <div class="feature-copy">
                                            <h3>Marketing Executive</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="feature-left">
                                        <span class="icon">
                                            <i class="icon-feather"></i>
                                        </span>
                                        <div class="feature-copy">
                                            <h3>Project Manager</h3>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1"><h4>If you’d like to join us but don’t see a role that’s right for you then we would like to hear from you. Email us at info@irawater.com with subject “Explore working with Ira” and tell us a bit about yourself.</h4></div>
                    </div>
                </div>
            </div>

            <div class="gtco-section gtco-gray-bg">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center service-heading">Enter your Details</h2>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your firstname">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="email">Email</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="subject">Subject</label>
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Applying for <job title>">
                                        </div>
                                    </div>
                                    <label class="btn btn-default btn-file">
                                        Upload Resume<input type="file" name="file" required="required" accept="application/pdf" style="display: none" /></label>
                                        
                                </div>
                                <div class="col-md-6">
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label class="sr-only" for="message">Message</label>
                                            <textarea name="message" name="message" id="message" cols="30" rows="6" class="form-control" placeholder="Write us something"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class=" form-group g-recaptcha" data-sitekey="6LfIFSIUAAAAAKliN_BSZeGRhyMjOB8E_r8XTYG9"></div> -->


                                </div>
                                <div class="row">
                                    

                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" value="Send Details" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div id="fh5co-footer" role="contentinfo">
                <div id="contact" class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <h3 class="section-title">About Us</h3>
                            <p>Ira Sustainable Water Solutions is on a mission to conserve water through Rainwater Harvesting and to save water through Water Saving Aerators.</p>
                            <p class="copy-right">
                                &copy; 2017 Ira Water <br>All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-md-4 ">
                            <h3 class="section-title">Our Address</h3>
                            <ul class="contact-info">
                                <li><i class="icon-map-marker"></i>B4, 1145 F.C. Road, Model Colony, Above Hotel Shravan, Shivajinagar, Pune-411016</li>
                                <li><i class="icon-phone"></i>+91 777 606 3322 | +91 777 606 3344</li>
                                <li><i class="icon-envelope"></i><a href="#">info@irawater.com</a></li>
                                <li><i class="icon-globe2"></i><a href="#">www.irawater.com</a></li>
                            </ul>
                            <h3 class="section-title">Connect with Us</h3>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/IraWater" target="_blank" class="facebook"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://twitter.com/IraWater " class="twitter"><i class="icon-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/ira-sustainable-water-solutions" target="_blank" class="dribbble"><i class="icon-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/irawater/" target="_blank" class="github"><i class="icon-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/c/Irawater" target="_blank" class="github"><i class="icon-youtube"></i></a></li>
                                <li><a href="https://vimeo.com/irawater/ " target="_blank" class="github"><i class="icon-vimeo"></i></a></li>
                                <li><a href="https://plus.google.com/+Irawater " target="_blank" class="github"><i class="icon-google"></i></a></li>
                                <li><a href="https://www.justdial.com/Pune/Ira-Sustainable-Water-Solutions--Mumbai-Banglore-Highway-Baner/020PXX20-XX20-150317124009-H1K5_BZDET " target="_blank" class="github"><img src="../images/jdIcon.png" /></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <h3 class="section-title">Drop us a line</h3>
                            <form class="contact-form" action="../submit.php" method="POST">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class=" form-group g-recaptcha" data-sitekey="6LfIFSIUAAAAAKliN_BSZeGRhyMjOB8E_r8XTYG9"></div>
                                <div class="form-group">
                                    <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/sticky.js"></script>
    <!-- Carousel -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="../js/jquery.countTo.js"></script>
    <!-- Stellar Parallax -->
    <script src="../js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="../js/services_main.js"></script>
    <script src="../js/About.js"></script>
    <script src="../js/mainHonest.js"></script>
	<script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-51415314-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
