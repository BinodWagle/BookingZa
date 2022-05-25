<?php include('include/currentPage_header.php') ?>

 <!-- service page carousel  -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
    </style>
</head>

<body class="bg-light">
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Facilities</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Hotel Services and Facilities
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-0 ms-3"> Free Wifi</h5>
                    <p class="text-center mt-3">
                        The average download speed for complimentary WiFi in hotels is 8.68 Mbps, and average upload speed is 7.57 Mbps.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/ac.png" width="40px">
                    <h5 class="m-0 ms-3">AC</h5>
                    <p class="text-center mt-3">
                        the most common heating and cooling solution for hotels, motels, assisted living, dorms, and more.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/minibar.png" width="40px">
                    <h5 class="m-0 ms-3">MiniBar</h5>
                    <p class="text-center mt-3">
                        Offering guests a place to keep their leftovers is a big plus. You can include simple snacks or beverages for purchase as well. 
                        
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/tv.png" width="40px">
                    <h5 class="m-0 ms-3">TV</h5>
                    <p class="text-center mt-3">
                        With the average hotel TV now 42 inches in size, these devices are best mounted on a central wall near the bed.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/breakfast.jpg" width="40px">
                    <h5 class="m-0 ms-3">Breakfast</h5>
                    <p class="text-center mt-3">
                        Be sure to offer nutritious foods for early risers, not just dense foods like potatoes and buttery scrambled eggs.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2"></div>
                    <img src="images/features/iron.png" width="40px">
                    <h5 class="m-0 ms-3">Clothing Iron</h5>
                    <p class="text-center mt-3">
                        An iron might not be the most exciting offering, but guaranteeing a guest potential for a wrinkle-free appearance in their important meeting is invaluable.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php require 'include/Footer.php';?>

</body>

</html>

      