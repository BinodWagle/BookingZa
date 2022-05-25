<?php include('../include/functions.php');
include('../include/general.php');
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<!-- template  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/adminPanel.css">

		<!-- own styling  -->
		<link rel="stylesheet" href="../assets/css/adminStyle.css">
		<link rel="stylesheet" href="../assets/css/form_style.css">
		<link rel="stylesheet" href="../assets/css/gallery.css">
		<link rel="stylesheet" href="../assets/css/booking_card.css">

		<!-- Jquery data tables pagination  -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.2/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.2/datatables.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Poppins&display=swap" rel="stylesheet">
<style>
		:root {
    --teal: blue;
    --teal_hover: darkblue;
}

* {
    font-family: 'Merienda One', cursive;
}

.h-font {
    font-family: 'Poppins', sans-serif;
}


</style>



  </head>


  <body class="bg-warning">

  <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h1><a href="#" class="logo"><?php echo $general_setting['Name'] ?></a></h1>
    <a href="../destroy.php" class="btn btn-light btn-sm">LOGOUT</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>     



  <body >
		
	<div class="wrapper d-flex align-items-stretch">


		<nav id="sidebar" class="navbar-dark bg-dark">
			<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-dark">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Menu</span>
	        </button>
            </div>


			<div class="nav nav-pills flex-column mt-3">
	        <ul class="list-unstyled components mb-5" id="nav">
				<li class="nav-item">
					<a class="tab" href="dashboard.php">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="tab" href="gallery.php">Gallery</a>
				</li >
				<li class="nav-item">
					<a class="tab" href="user.php">Users</a>
				</li>
	           <li>
	            <a href="#roomSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rooms</a>
	            <ul class="collapse list-unstyled" id="roomSubmenu">
				<li class="nav-item">
                    <a class="tab" href="roomType.php">Room type</a>
                </li>
				<li class="nav-item">
                    <a class="tab" href="room.php">Rooms</a>
                </li>
				<li class="nav-item">
                    <a class="tab" href="roomBooking.php">Room booking</a>
                </li>
	            </ul>
	          </li>

	          <li class="nav-item">
              <a class="tab" href="roomPayment.php">Payment</a>
	          </li>
			  <li class="nav-item">
              <a class="tab" href="account.php">Account</a>
	          </li> 
			  <li class="nav-item">
              <a class="tab" href="general_setting.php">General setting</a>
	          </li>  
	        </ul>
	      </div>
    	</nav>
</body>
