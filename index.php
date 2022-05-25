
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookingZa - Home</title>
    <?php require 'Links.php'?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <style>
    .availibility-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width: 57px) {
        .availibility-form {
            margin-top: 25;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">

<?php include('include/header.php') ?>

<!--Carousel Here-->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!--Check Availability Form -->

    <div class="container availibility-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability Form</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Deluxe Room</h5>
                        <h6 class="mb-4">Rs 500 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Sofa
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Gaming
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                6 Adult
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pil bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.PNG" class="card-img-top">
                    <div class="card-body">
                        <h5>Twin Bed Room</h5>
                        <h6 class="mb-4">Rs 100 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Sofa
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Gaming
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                6 Adult
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pil bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Single Bed</h5>
                        <h6 class="mb-4">Rs 300 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Bathroom
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                2 Sofa
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Gaming
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                6 Adult
                            </span>
                            <span class="badge bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pil bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="client/room.php" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="client/room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
            </div>
        </div>
    </div>




    <script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: {
            deplay: 3500,
            disableOnInteraction: false,
        }
    });
    </script>

<section id="roomType" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-3">Types of Rooms Available</h2>

            </div>
        </div>


<section id="contact" class="white-section">
<div class="container-xl mb-5 p-5">
	<div class="row">
		<div class="col-md-8 mx-auto">
		<div class="message"></div>
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">Have Queries? Please send your Message to BookingZa</p>
				<form id="contact-form" action="functions.php" method="post" autocomplete="off">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="FirstName" name="FirstName" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="LastName" name="LastName" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputEmail">Email Address</label>
						<input type="email" class="form-control" id="Email" name="Email" required>
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea class="form-control" id="Message" name="Message" rows="5" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name = "contact" > Submit </button>
				</form>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
	$('#contact-form').on('submit',function(e){
	  e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
        url:"functions.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success:function(data){      
			console.log("data");
		  console.log(data);
          var json = JSON.parse(data);
          if(json['error']!=""){
             $('.message').html(`<div class="alert alert-danger" role="alert"> ${json['error']}  </div>`);
			 $('#contact-form')[0].reset();
          }else{
			$('.message').html(`<div class="alert alert-success" role="alert"> ${json['msg']}  </div>`);
			$('#contact-form')[0].reset();
          }
          
           
       },
       error: function(data){
           console.log("error");
           console.log(data);
       }
      });
		})
	})
</script>

    <?php include('include/map.php') ?>
    
    <?php include('include/footer.php') ?>