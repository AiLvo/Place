<?php
session_start();
error_reporting(0);
require ('includes/dbconnection.php');
 
?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>Place parlour| Home Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<div class="preloader">
  <div class="dna-strand"></div>
</div>
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<div class="w3l-hero-headers-9">
  <div class="css-slider">
  <input id="slide-1" type="radio" name="slides" checked>
  <section class="slide slide-one">
    <div class="container">
      <div class="banner-text">
        <h4>Beauty On Peak</h4>
        <h3>Perfect day<br>
          spotless girl</h3>

        <a href="book-appointment.php" class="btn logo-button top-margin" style="border-radius: 40px 10px 40px 10px">Get An Appointment</a>
      </div>
    </div>
  </section>
  <input id="slide-2" type="radio" name="slides">
  <section class="slide slide-two">
    <div class="container">
      <div class="banner-text">
        <h4>Beauty On Peak</h4>
        <h3>Brand new look<br>
          brandy me</h3>
        <a href="book-appointment.php" class="btn logo-button top-margin" style="border-radius: 40px 10px 40px 10px">Get An Appointment</a>
      </div>
    </div>
  </section>
  </section>
  <input id="slide-3" type="radio" name="slides">
  <section class="slide slide-three">
    <div class="container">
      <div class="banner-text">
        <h4>Beauty On Peak</h4>
        <h3>Brand new look<br>
          brandy me</h3>
        <a href="book-appointment.php" class="btn logo-button top-margin" style="border-radius: 40px 10px 40px 10px">Get An Appointment</a>
      </div>
    </div>
  </section>
  </section>
  <input id="slide-4" type="radio" name="slides">
  <section class="slide slide-four">
    <div class="container">
      <div class="banner-text">
        <h4>Beauty On Peak</h4>
        <h3>Brand new look<br>
          brandy me</h3>
        <a href="book-appointment.php" class="btn logo-button top-margin" style="border-radius: 40px 10px 40px 10px">Get An Appointment</a>
      </div>
    </div>
  </section>
  <header>
    <label for="slide-1"></label>
    <label for="slide-2"></label>
    <label for="slide-3"></label>
    <label for="slide-4"></label>
  </header>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var interval = setInterval(function() {
    var $checked = $('input[name="slides"]:checked');
    var $next = $checked.next('input[name="slides"]');
    if ($next.length === 0) {
      $next = $('input[name="slides"]').first();
    }
    $next.prop('checked', true);
  }, 2000);

  // Reset the interval when a slider is clicked
  $('input[name="slides"]').click(function() {
    clearInterval(interval);
    interval = setInterval(function() {
      var $checked = $('input[name="slides"]:checked');
      var $next = $checked.next('input[name="slides"]');
      if ($next.length === 0) {
        $next = $('input[name="slides"]').first();
      }
      $next.prop('checked', true);
    }, 2000);
  });
});
</script>

<section class="w3l-call-to-action_9">
    <div class="call-w3 ">
        <div class="container">
            <div class="grids">
                    <div class="grids-content row">

                        <div class="column col-lg-4 col-md-6 color-2 ">
                            <div>
                            <h4 class=" ">Our Salon is Unique and Popular</h4>
                            <p class="para ">Carol Beauty Salon and Spa  Offers - Full Set Beauty Services</p>
                            <a href="about.php" class="action-button btn mt-md-4" style="border-radius: 40px 10px 40px 10px">Read more</a>
                        </div>
                    </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image  ">
                            <img src="assets/images/5.jpg" alt="product" class="img-responsive ">
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 back-image2 ">
                            <img src="assets/images/6.jpg" alt="product" class="img-responsive ">
                          </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">
		
				<div class="column2 image-text">
					<h3 class="title-big">Come experience the secrets of beauty in perfection</h3>
					<p class="para  text ">
						Best Beauty expert at your home with expert services you need. Home Salon provide well trained beauty professionals for beauty services at home including Facial, Clean Up, Bleach, Waxing, Masking, Pedicure, Manicure, etc.</p>
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4" style="border-radius: 40px 10px 40px 10px">Get An Appointment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                    <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a href="about.php">Get the best services from our Hair Salon</a></h3>
                    <p class="mt-3 para"> Our array of beauty parlour services include dreadlocks retouch, chrochets, Brazilian Wool threading, texturing, styling, waxing, pedicures, manicures, body spa, natural facials & twist outs and more.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="serices.php#dread">dread</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php#brazilianwool">Brazilian Wool</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php#brazilianwoolshort">Brazilian Wool Short</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php#dreadlockextension">Dreadlock Extension</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php3#crochets">Chrochets Braids</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php">Back Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php">Hair Treatment</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php">Face Massage</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php">Skin Care</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="services.php">Body Therapies</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>
<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>