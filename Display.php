<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vetrians</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Animal Health & Care</a><br><br>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item active" ><a href="Display.php" class="nav-link">Veterinarian</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Sponsor</a></li>
	          <li class="nav-item"><a href="veteriansign.php" class="nav-link">Vet-Login</a></li>
	           
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
      <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Veterinarian <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Meet Our Veterinary Doctor</h1>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class=" col-lg-11 col-12">
						
           



						<div class="table-resposive">
							<center><Table id="myTable" class="table-striped text-center table-bordered text-White" width="100%">
								<tr>
								<thead class="bg-dark ">
									<th class="py-3">Profile Pic</th>
									<th class="py-3">Description</th>
								</tr>
								</thead>
								<tbody>
								

<?php
include 'config.php';

$selectquery = "select * from veterian ";
$query = mysqli_query($con,$selectquery);
//$result = mysqli_fetch_array($query);
while($result = mysqli_fetch_array($query)){

?>
<tr>
	<td><img src="<?php echo $result['Image']; ?>" width="150" height="150" style="padding: 12px 13px 12px 13px"></td>
	<td><p>Name:- <?php echo $result['Name']; ?></p>
	<p> Qualification:-	<?php echo $result['Qualification']; ?></p>
	<p>Gender:-<?php echo $result['Gender']; ?></p>
	<p>Speciality:-<?php echo $result['Speciality']; ?></p>
 <p>Contact No.:-<?php echo $result['Num']; ?></p>
	<p>Email:-<?php echo $result['email']; ?></p>
	<p>Clinic Address:-<?php echo $result['Address']; ?></p>
	</td>
	</tr>
	<?php
}
?>
	</tbody>
							
							</Table></center>
						</div>
					</div>
				</div>
			</div>
		</section>

    
 <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Animal Health & Care</h2>
            <p>Don’t act blindly, treat Animals kindly.</p>
            <ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Latest News</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="https://timesofindia.indiatimes.com/life-style/relationships/pets/home-remedies-to-make-your-pups-kisses-smelly-to-sweet/articleshow/90036476.cms">Home remedies to make your pup’s smelly kisses sweet
</a></h3>
                <div class="meta">
                  <div><span class="icon-calendar"></span> 02 june 2022</a></div>
                  <div><span class="icon-person"></span> Admin</a></div>
                  </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="https://timesofindia.indiatimes.com/life-style/relationships/pets/demand-for-pet-sitting-rises-as-pet-parents-return-to-offices/articleshow/90184384.cms">Demand for pet-sitting rises as pet parents return to offices</a></h3>
                <div class="meta">
                  <div><span class="icon-calendar"></span> 02 june 2022</a></div>
                  <div><span class="icon-person"></span> Admin</a></div>
                 </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
            <h2 class="footer-heading">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.html" class="py-2 d-block">Home</a></li>
              <li><a href="about.html" class="py-2 d-block">About</a></li>
              <li><a href="services.html" class="py-2 d-block">Services</a></li>
              <li><a href="gallery.html" class="py-2 d-block">Gallery</a></li>
             <li> <a href="pricing.html" class="py-2 d-block" >Sponser</a></li>
             <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
          
              </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map"></span><span class="text">3/211 New Agra Colony Agra</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">1800 123 9898</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@animalhealt&care.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Animal Health & Care <i class="fa fa-heart" aria-hidden="true"></i></a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>