<?php require "./includes/common.php";
if (isset($_GET['errorold'])) {
  echo "<script>alert('OLD and new password doesn't match');</script>";
}
if (isset($_GET['entrym'])) {
  echo "<script>alert('two new password doesn't match');</script>";
}
if (isset($_GET['noerror'])) {
  echo "<script>alert('Updated');</script>";
}
if (isset($_GET['signup'])) {
  echo "<script>alert('Users on this email or mobile exists');</script>";
}
if (isset($_GET['loginempty'])) {
  echo "<script>alert('Credentials emtpy');</script>";
}
if (isset($_GET['loginnm'])) {
  echo "<script>alert('Invalid email id or password');</script>";
}
if (isset($_GET['loginad'])) {
  echo "<script>alert('Invalid email id or password');</script>";
}
if (isset($_GET['loginnad'])) {
  echo "<script>alert('No admin previleges');</script>";
}
 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMSIT Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <?php include "./includes/header.php" ?>

	<!-- Section: intro -->
    <section id="intro" class="intro">

		<div class="slogan">
			<h2>WELCOME TO <span class="text_color">NAMMA BLOG</span> </h2>
			<h4>MAKING THINGS HAPPEN</h4>
		</div>
		 <div class="col-md-12">
       <?php if (!isset($_SESSION['email'])) {?>

             <a href="login.php"><button type="submit" class="btn btn-skin pull-center" id="btnContactUs">
                            Sign in</button></a>
                          <?php } ;?>
                    </div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->


	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">

		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Timeline</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">

			<div class="col-sm-3 col-md-3" style="margin-left:11%;">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<a href="blog.php"><img src="img/icons/service-icon-2.png" alt="" /></a>
					</div>
					<div class="service-desc">
						<h5>Write a Blog</h5>
						<p>Write a blog and post on your timeline</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<a href="myblogs.php"><img src="img/icons/service-icon-3.png" alt="" /></a>

					</div>
					<div class="service-desc">
						<h5>My Blogs</h5>
						<p>Visit your blog</p>
					</div>
                </div>
				</div>
            </div>

            <div class="col-sm-3 col-md-3">
      				<div class="wow fadeInUp" data-wow-delay="0.2s">
                      <div class="service-box">
      					<div class="service-icon">
      						<a href="rblog.php"><img src="img/icons/service-icon-2.png" alt="" /></a>
      					</div>
      					<div class="service-desc">
      						<h5>Read a Blog</h5>
      						<p>Search and read your favourite blogs</p>
      					</div>
                      </div>
      				</div>
                  </div>

        </div>
		</div>
	</section>
	<!-- /Section: services -->



	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3" style="margin-left:25%;">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Pavan Hoysal LS</h5>
                        <p class="subtitle">AI Freek</p>
                        <div class="avatar"><img src="img/team/5.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>NIKHIL</h5>
                        <p class="subtitle">Programming Ninja</p>
                        <div class="avatar"><img src="img/team/team2.png" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>

            </div>
        </div>
		</div>
	</section>
	<!-- /Section: about -->






	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form" action="getintouch.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input name="name1" type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email1" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>

				<address>
				  <strong>Team La Cosa Nostra</strong><br>
				  BMSIT,CSE<br>
				  Bengaluru<br>
				  <abbr title="Phone">Phone:9066369651,8197736624</abbr>
				</address>

				<address>
				  <strong>Email</strong><br>
				 <a href="mailto:#">pavanhoysal97@gmail.com</a><br>
				 <a href="mailto:#">arnikhil0@gmail.com</a><br>

				</address>


			</div>
		</div>
    </div>

		</div>
	</section>
	<!-- /Section: contact -->
	<?php include "./includes/footer.php" ?>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
