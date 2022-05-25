 <?php
 include('Links.php');
 ?>

 <style>
.glow {
  font-size: 20px;
  color: greenyellow;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>

<!-- footer -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">
                  <i class="fs-3 mb-2"></i><?php echo $general_setting['Name'] ?>
                </h3>
                <p class="font-italic fs-6">
                    <!-- Description  -->
               <?php echo $general_setting['Description'] ?>
                </p>
            </div>
            <div class="col-lg-4 p-4 mb-2 ">
                <h5 class="mb-3">Links</h5>
                <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
                <a href="client/room.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
                <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a>
            </div>
            <div class="col-lg-4 p-4">
                <p><i class="fas fa-home mb-3"></i><?php echo $general_setting['Address_line1'] ?>,
                   <?php echo $general_setting['Address_line2'] ?>,
                   <?php echo $general_setting['City'] ?>,
                   <?php echo $general_setting['State'] ?>,</p>
                   <p>Country :<?php echo $general_setting['Country'] ?>,</p>
                   <p>  Pin Code :<?php echo $general_setting['Zip_code'] ?> </p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    <?php echo $general_setting['Email'] ?>
                  </p>
                  <p><i class="fas fa-phone me-3"></i>     <?php echo $general_setting['Phone_number'] ?> </p>
                  <p><i class="fas fa-print me-3"></i>     <?php echo $general_setting['Telephone_number'] ?> </p>
            </div>
        </div>
    </div>
    <br>
    <h6 class="glow footer text-center bg-dark text-white p-3 m-0">Designed and Develeoped by BookingZa Company</h6>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>




