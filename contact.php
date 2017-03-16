

<!DOCTYPE html>
<html>
<head>
<title>Consultant</title>
<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Stylesheet-Links -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen" />
<!-- //Custom-Stylesheet-Links -->
<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

    <style>
        .submit:hover{
            border:2 px solid #ff8000;
            background-color:"white";
            color:#ff8000;
        }
       
    .header{
            background-color:#ff6600;
            opacity:.6;
            
           
        }
        #jssor_1{
            border-top:4px solid #b34700;
             box-shadow:inset 0px 4px rgba(204, 82, 00);
        }
    </style>
</head>
<body>
<!-- Banner -->
	<div style="background-image:url('images/banner.jpg')"> 
		<!-- Header -->
	<div class="header">
		<div class="container">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" ><img src="images/logo" style="max-width:280px;"></a>
				</div>

				<div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar">
					<ul>
						<li><a href="index.html" ><span data-hover="HOME">HOME</span></a></li>
						<li><a href="coreteam.html"><span data-hover="TEAM">TEAM</span></a></li>
						<li><a href="services.html"><span data-hover="SERVICE">SERVICES</span></a></li>
                        <li><a href="blog.html"><span data-hover="BLOG">BLOG</span></a></li>
						<li><a href="contact.php" class="active">CONTACT</a></li>
                      
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->
		
	</div>
	</div>
      
	<!-- //Header -->
    </div>
		<!-- //Banner -->
		<!-- contact -->
	<div class="contact wthree-2">
		<div class="container">
			
                <div class="container" style="text-align:center">
                    <blockquote class="wow fadeInRight animated" data-wow-delay=".3s" style="text-indent:10px">  For any queries on how we can help your people and organisasion grow<br/>Please connect with:</blockquote> <br/>
                </div>
           
			
			<div class="contact-form">
				<div class="col-md-4 contact-form-left agile-3">
					<h2>Address :</h2>
					<p>Eiusmod Tempor inc</p>
					<p>Anshumal Dikshit</p>
				    <p>Telephone : +91 - 9810452580,<br/>8586984190</p>
					<a href="anshumaldikshit@yahoo.com">anshumaldikshit@yahoo.com</a>
				</div>
				<div class="col-md-8 contact-form-right  agileits-3">
					<h3>Getting in Touch:<br/><small style="font-size:13px"><font color=red>All fields are required&nbsp;<sup>*</sup></font></small></h3>
                    
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="contact">
						<input type="text" name="name" placeholder="Name" pattern="[a-zA-z]{3,30}" required>
                        <span class="error">* <?php echo $nameer;?></span>
						<input type="email" name="email" placeholder="Email" required>
                        <span class="error">* <?php echo $emailer;?></span>
						<input type="text" name="phone" placeholder="Phone" pattern="\d{10}" title="eg: 9845689098" required>
						<span class="error">* <?php echo $phoneer;?></span>
						<textarea placeholder="Message" name="message" required=""></textarea>
                        <span class="error">* <?php echo $messageer;?></span>
						<input type="submit" value="Submit" class="submit">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
           
            <h1 style="font-size:2.2em;margin-top:90px;">On Map</h1> 
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
		</div>
	</div>
	<!-- //contact -->
	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info">
				<div class="col-md-4 col-sm-4 footer-info-grid newsletter wow fadeInLeft animated" data-wow-delay=".5s">
                    <a href="index.html"><h4 style="font-size:1em"><i class="fa fa-arrow-right fa-x"></i>&nbsp;HOME</h4></a>
                    <a href="coreteam.html"><h4 style="font-size:1em"><i class="fa fa-arrow-right fa-x"></i>&nbsp;CORE TEAM</h4></a>
                    <a href="services.html"><h4 style="font-size:1em"><i class="fa fa-arrow-right fa-x"></i>&nbsp;SERVICES</h4></a>
                    <a href="contact.html"><h4 style="font-size:1em"><i class="fa fa-arrow-right fa-x"></i>&nbsp;CONTACT US</h4></a>
					
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid address animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<h4>GETTING IN TOUCH</h4>
					<address>
						<ul>
							<li>Anshumal Dikshit</li>
							<li>Telephone : +91 - 9810452580,8586984190</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">anshumaldikshit@yahoo.com</a></li>
						</ul>
					</address>
				</div>
			
				<div class="col-md-4 col-sm-4 footer-info-grid social wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Follow Us</h4>
					<ul>
						<li><a href="#"><span class="fa"> </span></a></li>
						<li><a href="#"><span class="tw"> </span></a></li>
						<li><a href="#"><span class="g"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="copyright animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<p>&copy; 2016  All Rights Reserved | Design by <a href="https://www.linkedin.com/in/raghvendra-sharma-722504113"> Raghvendra Sharma</a></p>
			</div>

		</div>
         
	</div> 
     
	<!-- //Footer -->
	</body>
	</html>
<?php
    $name=$message=$phone=$email="";
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $name=contact($_POST["name"]);
        $phone=contact($_POST["phone"]);
        $email=contact($_POST["email"]);
        $message=contact($_POST["message"]);
        function test_input($data) {
            $data = trim($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>