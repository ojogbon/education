<?php session_start();
include 'connect.php';?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Education</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
        <header id="header" id="home">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                            <a href="tel:+234 000 0000 0000"><span class="lnr lnr-phone-handset"></span> <span class="text">+234 000 0000 0000</span></a>
                            <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@cqt.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <h4 style="color: #fff;font-family: roboto;">RATES<h4/>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="rates.php">Rate a Lecturer Today!</a></li>

                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Rate
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="rates.php"> Rate</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
				
			<!-- Start Rate-list Area -->
			<section class="Rate-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center cover-rates">
                        <?php
                        $select_query = "select * from lecturer order by id desc";
                        $my_select = mysqli_query($mycon,$select_query);
                        $count = 0;
                        while($data = mysqli_fetch_array($my_select)){
                            $count++;


                            ?>
                            <div class="col-lg-6 pb-30">
                                <div class="single-carusel row align-items-center">
                                    <div class="col-12 col-md-6 thumb">
                                        <img src="">
                                        <img class="img-fluid" style="width:500px" src="../education/admin/file/<?php echo $data["photo"];?>" alt="Loading...">
                                    </div>
                                    <div class="detials col-12 col-md-6">
                                        <p><?php echo $data["date"];?></p>
                                        <a href="event-details.html"><h4><?php echo $data["firstname"]." ".$data["lastname"];?></h4></a>
                                        <p>
                                            <?php echo $data["role"];?>
                                        </p>
                                        <form method="post"> <select class="doRate" data-ids="<?php echo $data["id"];?>" name="rates">
                                                <option value="">Ratings</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select> </form>
                                    </div>

                                </div>

                            </div>
                            <?php
                        }
                        ?>


					</div>
				</div>	
			</section>
			<!-- End Rate-list Area -->
				



			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Top Products</h4>
								<ul>
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Quick links</h4>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Features</h4>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Resources</h4>
								<ul>
									<li><a href="#">Guides</a></li>
									<li><a href="#">Research</a></li>
									<li><a href="#">Experts</a></li>
									<li><a href="#">Agencies</a></li>
								</ul>								
							</div>
						</div>																		
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
							</div>
						</div>											
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Colorlib</a> and developed by
                            <a href="#" target="_blank">CQT</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
            <script src="js/rate.js"></script>
		</body>
	</html>