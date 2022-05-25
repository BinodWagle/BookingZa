<?php 

include('include/header.php') ;
if(!isset($_SESSION['loggedUserId'])) {
  header('Location:../login.php');
 }
 
?>

<section id="roomType" class="ftco-section bg-light">
   
<!-- Room Payment Modal -->

<div class="modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="model-payment" action="status_functions.php" method="POST">
                  <!-- for getting the id when the form is submitted  -->
            <label for="paymentType">Choose payment method</label>
            <select name="paymentType" id="paymentType" class="form-control custom-select bg-white border-md filter" required>
    
                <option value="Cash">Cash</option>
                <option value="Net Banking">Online Wallet</option>
                <option value="Credit Card">Bank Account</option>
                <option value="Debit Card">Debit Card</option>
            </select>
            <input type="hidden" id="bookingId" name="bookingId">

      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Pay</button>
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
          </form>
            
      </div>
      
    </div>
  </div>
</div>

<!-- End of room payment section  -->

    <div class="container">

    <div class="content">

      <h2 class="mb-5 text-center">Booking History</h2>
    
         <!-- This is Filter Drop down Menu Bar  -->
                 <div class="float-right filterBy">
                <select name="category" id="roomBookingFilter" class="form-control custom-select bg-white border-md filter mt-2">
                  <option disabled="" selected="">Choose FilterB </option>
                  <option value="1">All Booking</option>
                  <option value="2">Booked</option>
                  <option value="3">Paid Booking</option>
                  <option value="4">Cancelled Booking</option>
                  <option value="5">Rejected Booking</option>
                  <option value="6">Expired Booking</option>
                </select>
                </div>
                <br>
               <div class="container" id="contentArea">
               </div>
             </div>
           </div>
         </section>


<script src="js/mybookingRoom.js"></script>
<script src="js/mybookingEvent.js"></script>


 