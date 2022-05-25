<?php include('include/currentPage_header.php') ?>

<!-- About  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'Links.php'?>
    <style>
    .box {
        border-top-color: var(--teal) !important;
    }
    </style>
</head>

<body class="bg-light">
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            BookingZa, Hotels & Rooms, is an Online Hotel Room Booking Website.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">BookingZa Mission</h3>
                <p>
                    BookingZa is a online booking website that empowers entrepreneurs and small businesses with hotels and rooms by providing full stack technology that increases earnings and eases operations. Bringing affordable and trusted accommodation that guests can book instantly.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/world.jpg" class="w-90">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/room.jpg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/book.png" width="70px">
                    <h4 class="mt-3">100+ Booking</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/reviews.png" width="70px">
                    <h4 class="mt-3">100+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.png" width="70px">
                    <h4 class="mt-3">100+ Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>




</body>
</html>


<?php include('include/footer.php')?>