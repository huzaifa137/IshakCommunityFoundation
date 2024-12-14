<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>IshakCommunityOrganisation</title>

<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/css/animate.css" rel="stylesheet">
<link href="/assets/css/bootsnav.css" rel="stylesheet">
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/owl.carousel.css">
<link href="/assets/css/owl.theme.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
</head>
<body>
<div class="topbar">
<div class="container">
<div class="row"> 
<div class="bar-phone">
<span class="p-dark">Call Us :</span> <span class="p-dark"><strong>+91 9904518814</strong></span>
</div>
<div class="bar-mail">
<i class="fa fa-envelope"></i> <span class="p-dark">Mail Us :</span><span class="p-dark"> <strong>info@ishakfoundation.org</strong></span>
</div>
<div class="header-social">
<a class="facebook" href="#" title="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i>  </a>
<a class="twitter" href="#" title="twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i>  </a>
<a class="linkedin" href="#" title="linkedin" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i>  </a>
<a class="google" href="#" title="google-plus" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i>  </a>
<a class="youtube" href="#" title="youtube-play" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i>  </a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-default navbar-sticky bootsnav">
<div class="container">
<div class="row"> 
<div class="attr-nav">
<a class="sponsor-button" href="sponsor-a-child">sponsor a child</a>
<a class="donation" href="donate">donate now</a>
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="/"><img src="/assets/images/logo.png" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
<li><a href="/">Home</a></li>
<li><a href="aboutus">About Us</a></li>
<li><a href="activities">Activities</a></li>
<li><a href="projects">Projects</a></li>
<li><a href="gallery">Gallery</a></li>
<li><a href="contact">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</nav>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>SPONSER A CHILD</h1></div>
<div class="col-sm-6">
<h6 class="breadcrumb"><a href="/">Home</a> / Sponser a Child</h6></div>
</div>
</div> 	 	
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<div id="owl-demo" class="owl-carousel owl-theme">
          
    
    @foreach ($data as $item)       
<div class="item">
<div class="sponser-box">
<img src="{{'/public/public/sponsor_a_child/'.$item->image}}" alt="Owl Image">
<h4>Hi Iam, {{$item->firstname}}</h4>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Where I Live</div> 
<div class="col-xs-6">{{$item->location}}</div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">My Age</div> 
<div class="col-xs-6">{{$item->age}}</div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">My Grade</div> 
<div class="col-xs-6">{{$item->grade}}</div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Support Needed</div> 
<div class="col-xs-6">{{$item->supportcatogory}}</div>
</div>
<a href="donate" class="btn1">Sponsor me</a>
</div>
</div>
@endforeach


</div>
</div>
</div>
</section>
<section id="activities-sec">
    <div class="container">
    <div class="row text-center">
    <h1>WHAT WE DO?</h1>
    <hr>
    <h5>To change Lives through providence of medical care to the vulnerable people in the community and also help orphaned and vulnerable children in spheres like education, child advocacy, providence of children’s needs and Empowering the Youths Towards goals of self-sustainability and Livelihood so as to sow for a better future.</h5>
    <div class="text-left"> 
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-heart"></i></div>
    <div class="grid-content-wrapper"><h4>Charity for Education</h4><p>Education is the key to transforming the lives of poor children and adolescents. Through it, they can get bright futures with decent work, better health, and a good income. </p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
    <div class="grid-content-wrapper"><h4>Feed for Hungry Child</h4><p>Hunger is a problem for school-going kids from vulnerable families and it hurts their progress in school.
        So, we plan on providing them with a daily meal ranging from breakfast, lunch and this makes their life in school easier and better.
        </p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-home"></i></div>
    <div class="grid-content-wrapper"><h4>Home for Homeless</h4><p>We have a plan of constructing four bed room houses containing the two rooms for the suffering male child, two rooms for females, and sparing room for the old. This would enable us supervise our chosen people in the community well. </p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-tint"></i></div>
    <div class="grid-content-wrapper"><h4>Bringing Clean Water</h4><p>We aim at providing communities in need with sustainable solutions to their water problems. Such solutions include providing rainwater harvesting systems, installing water pumps, rehabilitating damaged water source infrastructure and construction of boreholes .</p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
    <div class="grid-content-wrapper"><h4>Help Little Hands</h4><p>We also plan of supporting the families of all children supported by the organization with some household items such as mosquito nets, toothpaste, and soap. This puts them in a better position to take their children to school and provide a conducive environment for children when they come back from school.</p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    <div class="col-md-4 clearfix top-off">
    <div class="grid-content-left"><i class="fa fa-money"></i></div>
    <div class="grid-content-wrapper"><h4>Donate for Children</h4><p>We hope to increase on the number of children supported by Ishak community organization but we always limited by the funding. We provide scholastic materials such as school uniforms, shoes, school bags, books, pens, pencils, sanitary pads, etc. to all the children supported by the organization.</p>
    <a href="activities" title="" >Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    

    <section id="video-sec">
        <div class="container">
        <div class="row text-center">
        <h1>How can you help?</h1>
        <hr>
        <h5>Help us transform the society by attaining the goals of better health, happy childhood and self-sustainability.</h5>
        <div class="text-left"> 
        <div class="col-md-6 clearfix top-off">
        <video width="400" controls>
         <source src="/assets/images/mov_bbb.mp4" type="video/mp4">
        </video>
        </div>
        <div class="col-md-6 clearfix top-off">
        <div class="media">
        <div class="media-image">
        <img src="/assets/images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
        <div class="media-text">
        <h5>BECOME A VOLUNTEER</h5>
        <p class="p-dark class="link-color"">Becoming a volunteer by joining the Organisation membership</p>
        </div>
        </div>
        <div class="media">
        <div class="media-image">
        <img src="/assets/images/g2.png" class="attachment-full size-full" alt="g1">																							</div>
        <div class="media-text">
        <h5>MAKE A GIFT</h5>
        <p class="p-dark class="link-color"">Donate a gift the different projects and activties which are on going</p>
        </div>
        </div>
        <div class="media">
        <div class="media-image">
        <img src="/assets/images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
        <div class="media-text">
        <h5>GIVE A SCHOLASHIP</h5>
        <p class="p-dark class="link-color"">Education is a basic need , we're in need of scholarship for the children were catering for.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        


<div class="callout">
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
                </div><!-- /.columns large-6 -->
                
                <div class="col-md-6">
                    <div class="callout-actions">
                        <a href="contact" class="button">Become Volunteer</a>
    
                        <span class="callout-separator">
                            <span>Or</span>
                        </span>
    
                        <a href="donate" class="button">Donate For Cause</a>
                    </div><!-- /.callout-actions -->
                </div><!-- /.columns large-6 -->
            </div><!-- /.row -->
    </div>
    </div>
    
    <footer class="footer">
        <div class="footer-body">
            <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-section">
                    <h4 class="footer-section-title">About Ishak Community Organisation</h4><!-- /.footer-section-title -->
                    
                    <div class="footer-section-body">
                        <p style="color: white">Bringing a smile on the face of every child and human in the world is our passion, we have done this through providing educational services to the orphans, we aim at providing healthcare services to the children, elderly and un abled people such as pregnant mothers. We also provide basic needs like clothes, books, water, food etc. to the poor, this has brought a smile to people in the community.</p>
                    </div><!-- /.footer-section-body -->
                </div><!-- /.footer-section -->
            </div><!-- /.columns large-3 medium-12 -->
            
            <div class="col-md-4">
                <div class="footer-section">
                    <h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->
                    
                    <div class="footer-section-body">
                        <ul class="list-links">
                            <li>
                                <a class="link-color" href="/">Home</a>
                            </li>
                            
                            <li>
                                <a class="link-color" href="aboutus">About Us</a>
                            </li>
                            
                            <li>
                                <a class="link-color" href="activities">Activities</a>
                            </li>
                            <li>
                                <a class="link-color" href="projects">Projects</a>
                            </li>
                            
                            <li>
                                <a class="link-color" href="gallery">Gallery</a>
                            </li>
                            
                            <li>
                                <a class="link-color" href="contact">Contact Us</a>
                            </li>
                            
                        </ul><!-- /.list-links -->

                    </div><!-- /.footer-section-body -->
                </div><!-- /.footer-section -->
            </div><!-- /.columns large-3 medium-12 -->
            
            
            
            <div class="col-md-3">
                <div class="footer-section">
                    <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->
                    
                    <div class="footer-section-body" style="color:whitesmoke;">
                        <p ><b>Address:</b> near Bujagali in Jinja, Uganda</p>

                        <div class="footer-contacts" style="color:whitesmoke;">
                            <p>
                                <b>
                                    <i class="fa fa-phone"></i> Phone:
                                </b>

                                +91 9904518814
                            </p>
                            
                            <p>
                                <b>
                                    <i class="fa fa-envelope-o" ></i> Email:
                                </b>

                                isaacisiko12@gmail.com
                            </p>
                        </div><!-- /.footer-contacts -->
                    </div><!-- /.footer-section-body -->
                </div><!-- /.footer-section -->
            </div><!-- /.columns large-3 medium-12 -->
        </div><!-- /.row -->
    </div>
    </div><!-- /.footer-body -->
    
        </footer>
    
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/banner.js"></script>  
    <script src="/assets/js/owl.carousel.js"></script>
     <script>
              $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          navigation : true,
          navigationText:["",""],
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });
              </script>
              <script src="/assets/js/script.js"></script>
    </body>
    </html>
    