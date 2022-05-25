<?php

//User table 

include("../include/dbConnect.php");
if(isset($_POST['userFilter'])){

  $userTable='<br><br>';
    if(isset($_POST['msg'])){ 
            $userTable.='<div class="alert alert-success" role="alert">' . $_POST["msg"].' </div>';
          }
      if (isset($_POST["error"])) {
        $userTable.='<div class="alert alert-danger">' . $_POST["error"] . '</div>';
      }
       

        $userTable.='<div class="table-responsive">
        <table class="table table-hover " id="userTable">
<thead class="thead-dark">
    <tr >
      <th scope="col">Profile</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact no</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>';
    

   
    $userFilter = $_POST['userFilter'];
   if($userFilter==""){
    $selectAllUser = "SELECT * FROM users_details where FirstName <> 'admin' ";
   }else{
    $selectAllUser = "SELECT * FROM users_details WHERE Status like '".$userFilter."' AND FirstName <> 'admin' ";
   }
   
    $allUser = mysqli_query($con,$selectAllUser);
    $noOfUsers = mysqli_num_rows($allUser);

    if($noOfUsers>=1){
        while($row=mysqli_fetch_assoc($allUser))
        {
           
          $userTable.=' <tr>
                    <td><a href="../assets/picture/profiles/'.$row["ProfileImage"].'" > 
                    <img class="round-img" src="../assets/picture/profiles/'.$row["ProfileImage"].'" alt="Profile"/>
                    </a>
                    </td>
                    <td>'.$row["FirstName"].'</td>
                    <td>'.$row["LastName"].'</td>
                    <td>'.$row["Gender"].'</td>
                    <td>'.$row["Email"].'</td>
                    <td>'.$row["ContactNo"].'</td>
                    <td>'.$row["Status"].'</td>
                    <td>
                       
              <input type="hidden" name="userId" value="'.$row["UserId"].'"/> ';
              $userTable.="<button class='btn btn-secondary'  name='EditUser' onclick=\" editUser('".$row["UserId"]."') \"> Edit </button>";
              $userTable.="<button class='btn btn-danger' name='deleteUser' onclick=\"confirm('Are you want to delete  ".$row["FirstName"]."') && deleteUser('".$row["UserId"]."')\">Delete</button>
                     
                    </td>
            </tr>";
        }
      }
    else 
    {
    
      $userTable.='<tr><td colspan="8" style="color:red;text-align:center;">No records are found </td></tr>';
    
    }

    $userTable.='</tbody>
    </table></div>';
  echo $userTable;
  }


  //Gallery Action 
 if(isset($_POST['galleryFilter'])){
  
  $dirname = "../assets/picture/gallery/";
  $images = glob($dirname."*.*");
  $returnData ='' ;
  if(isset($_POST['msg'])){ 
    $returnData.='<div class="col-12 alert alert-success" role="alert">' . $_POST["msg"].' </div>';
  }
if (isset($_POST["error"])) {
$returnData.='<div class="col-12 alert alert-danger">' . $_POST["error"] . '</div>';
}
  foreach($images as $image) {
    $returnData.=' <div class="col-sm-6 col-md-4 col-lg-3 item">
              <div class="hovereffect">
              <img class="img-responsive img-fluid gallery-images img-thumbnail" src="'.$image.'" alt="">
              <div class="overlay">';
              $returnData.="    <a class='info' href='#'  onclick=\"confirm('Are you want to delete this image') && deleteImage('".$image."')\">Delete</a>
              </div>
              </div>
          </div>";

  
  }
  
  echo $returnData;

 }

   //---------------------------------------------- Room Type table -----------------------------------------

   if(isset($_POST['roomTypeFilter'])){

    $typeTable='<br><br>';

    if(isset($_POST['msg'])){ 
            $typeTable.='<div class="alert alert-success" role="alert">' . $_POST["msg"].' </div>';
          }
      if (isset($_POST["error"])) {
        $typeTable.='<div class="alert alert-danger">' . $_POST["error"] . '</div>';
      }
       

        $typeTable.='<div class="table-responsive">
        <table class="table table-hover " id="userTable">
<thead class="thead-dark">
    <tr >
      <th scope="col">Image</th>
      <th scope="col">Type Name</th>
      <th scope="col">Cost</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
      
    </tr>
  </thead>
  <tbody>';
    

   
    $roomTypeFilter = $_POST['roomTypeFilter'];


   switch($roomTypeFilter){
      case 1:  $selectAllType = "SELECT * FROM room_type "; break;
      case 2:  $selectAllType = "SELECT * FROM room_type WHERE Status like 'active' ";break;
      case 3:  $selectAllType = "SELECT * FROM room_type WHERE Status like 'in-active' ";break;
      case 4:  $selectAllType = "SELECT * FROM room_type WHERE Cost < 500 ";break;
      case 5:  $selectAllType = "SELECT * FROM room_type WHERE Cost >=500 AND Cost<=1000 ";break;
      case 6:  $selectAllType = "SELECT * FROM room_type WHERE Cost >1000 ";break;
      default: $selectAllType = "SELECT * FROM room_type "; break;
      
   }

    $allType = mysqli_query($con,$selectAllType);
    $noOfType = mysqli_num_rows($allType);

    if($noOfType>=1){
        while($row=mysqli_fetch_assoc($allType))
        {
           
          $typeTable.=' <tr>
                    <td><a href="../assets/picture/RoomType/'.$row["RoomImage"].'" > 
                    <img class="round-img" src="../assets/picture/RoomType/'.$row["RoomImage"].'" alt="Profile"/>
                    </a>
                    </td>
                    <td>'.$row["RoomType"].'</td>
                    <td>'.$row["Cost"].'</td>
                    <td>'.$row["Description"].'</td>
                    <td>'.$row["Status"].'</td>
                   
                    <td>
                       
              <input type="hidden" name="userId" value="'.$row["RoomTypeId"].'"/> ';
              $typeTable.="<button class='btn btn-secondary'  name='EditUser' onclick=\" editRoomType('".$row["RoomTypeId"]."') \"> Edit </button>";
              $typeTable.="<button class='btn btn-danger' name='deleteUser' onclick=\"confirm('Are you want to delete  ".$row["RoomType"]."') && deleteRoomType('".$row["RoomTypeId"]."')\">Delete</button>
                     
                    </td>
            </tr>";
        }
      }
    else 
    {
    
      $typeTable.='<tr><td colspan="8" style="color:red;text-align:center;">No records are found </td></tr>';
    
    }

    $typeTable.='</tbody>
    </table></div>';

  echo $typeTable;

   } 

   //---------------------------------------------- Room List table -----------------------------------------

   if(isset($_POST['roomFilter'])){
    $roomTable='<br><br>';
    if(isset($_POST['msg'])){ 
            $roomTable.='<div class="alert alert-success" role="alert">' . $_POST["msg"].' </div>';
          }
      if (isset($_POST["error"])) {
        $roomTable.='<div class="alert alert-danger">' . $_POST["error"] . '</div>';
      }
       

        $roomTable.='<div class="table-responsive">
        <table class="table table-hover " id="userTable">
<thead class="thead-dark">
    <tr >
      <th scope="col">Room Type</th>
      <th scope="col">Cost</th>
      <th scope="col">Room Number</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>';
    

   
    $roomFilter = $_POST['roomFilter'];
   if($roomFilter==""){
    $selectAllRoom = "SELECT rl.RoomId,rt.RoomType,rt.Cost,rl.RoomNumber,rl.Status FROM room_list rl inner join room_type rt on  rl.RoomTypeId = rt.RoomTypeId";
   }else{
    $selectAllRoom = "SELECT rl.RoomId,rt.RoomType,rt.Cost,rl.RoomNumber,rl.Status FROM room_list rl  inner join room_type rt on  rl.RoomTypeId = rt.RoomTypeId WHERE rl.Status like '".$roomFilter."' ";
    
   }

   
    $allRoom = mysqli_query($con,$selectAllRoom);
    $noOfrooms = mysqli_num_rows($allRoom);

    if($noOfrooms>=1){
        while($row=mysqli_fetch_assoc($allRoom))
        {
           
          $roomTable.=' <tr>
                    
                    <td>'.$row["RoomType"].'</td>
                    <td>'.$row["Cost"].'</td>
                    <td>'.$row["RoomNumber"].'</td>
                    <td>'.$row["Status"].'</td>
                   
                    <td>
                       
              <input type="hidden" name="userId" value="'.$row["RoomId"].'"/> ';
              $roomTable.="<button class='btn btn-secondary'  name='EditUser' onclick=\" editRoom('".$row["RoomId"]."') \"> Edit </button>";
              $roomTable.="<button class='btn btn-danger' name='deleteUser' onclick=\"confirm('Are you want to delete the room number  ".$row["RoomNumber"]."') && deleteRoom('".$row["RoomId"]."')\">Delete</button>
                     
                    </td>
            </tr>";
        }
      }
    else 
    {
    
      $roomTable.='<tr><td colspan="8" style="color:red;text-align:center;">No records are found </td></tr>';
    
    }

    $roomTable.='</tbody>
    </table></div>';
  echo $roomTable;
   } 
   
   
   //---------------------------------------------- Room Booking table -----------------------------------------

   if(isset($_POST['roomBooking'])){

    $roomTable='<br><br>';
    if(isset($_POST['msg'])){ 
            $roomTable.='<div class="alert alert-success" role="alert">' . $_POST["msg"].' </div>';
          }
      if (isset($_POST["error"])) {
        $roomTable.='<div class="alert alert-danger">' . $_POST["error"] . '</div>';
      }
       

        $roomTable.='<div class="table-responsive">
        <table class="table table-hover " id="userTable">
<thead class="thead-dark">
    <tr >
      <th scope="col">User</th>
      <th scope="col">Date</th>
      <th scope="col">Room Type</th>
      <th scope="col">Room No</th>
      <th scope="col">CheckIn</th>
      <th scope="col">CheckOut</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col">Details</th>
      
    </tr>
  </thead>
  <tbody>';
    
  $filter = $_POST['filter'];

  switch($filter){
    case 1:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                order by rm.Date desc";
                                break;

    case 2:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where rm.Status = 'Booked'
                                order by rm.Date desc";
                                break;

    case 3:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where rm.Status = 'Paid'
                                order by rm.Date desc";
                                break;


    case 4:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where rm.Status = 'Cancelled'
                                order by rm.Date desc";
                                break;

    case 5:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where rm.Status = 'Rejected'
                                order by rm.Date desc";
                                break;

    case 6:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where rm.Checkout < CURDATE() AND  rm.Status = 'Paid'
                                order by rm.Date desc";
                                break;

    case 7:  $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                where  rm.Status = 'CheckedOut'
                                order by rm.Date desc";
                                break;

    default: $selectBooking =  "SELECT rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_booking rm 
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                order by rm.Date desc";
                                break;
    
 }

   $booking = mysqli_query($con,$selectBooking);
   $noOfBooking = mysqli_num_rows($booking);

   if($noOfBooking>=1){
       while($row=mysqli_fetch_assoc($booking))
       {
          
         $roomTable.=' <tr>
                   
                   <td>'.$row["FirstName"].'</td>
                   <td>'.$row["Date"].'</td>
                   <td>'.$row["RoomType"].'</td>
                   <td>'.$row["RoomNumber"].'</td>
                   <td>'.$row["CheckIn"].'</td>
                   <td>'.$row["CheckOut"].'</td>
                   <td>'.$row["Amount"].'</td>
                   <td>'.$row["Status"].'</td>
                   
               ';

                          if($row['Status']=="Booked"){
                          $roomTable .=' <td>
                          <a href="#" class="btn btn-primary btn-sm" onclick="setPaid(\''.$row["BookingId"].'\')">Pay</a>
                          <a href="#" class="btn btn-danger btn-sm" onclick="confirm(\'Are you sure ? Do you want to Cancel this Booking \') && setReject(\''.$row["BookingId"].'\')">Cancel</a>
                         
                          </td>	 ';
                          }
                          else if ($row['Status']=="Paid"){
                              $roomTable .='<td><form action="../include/pdf.php" method="POST" >
                              <input type="hidden" value="'.$row['BookingId'].'"  name="bookingId" />
                              <button type="submit" class="btn btn-primary btn-sm">Bill</button>
                              </form>
                              <button class="btn btn-secondary btn-sm" onclick="confirm(\'Are you sure ? Do you want to make available this room \') && setFree(\''.$row["BookingId"].'\')">Free</button>
                            
                              </td> 	 ';
                          }
                          else if ($row['Status']=="Cancelled"){
                              $roomTable .='       <td>
                              
                              <span>Cancalled by Client</span>
                              </td>	';
                          } 
                          else if ($row['Status']=="Rejected"){
                              $roomTable .='         <td>
                              
                              <span>Cancalled by Admin</span>
                              </td>	';
                          }
                          else{
                              $roomTable .='<td><form action="../include/pdf.php" method="POST" >
                              <input type="hidden" value="'.$row['BookingId'].'"  name="bookingId" />
                              <button type="submit" class="btn btn-primary btn-sm">Bill</button>
                            
                              </td></form> 	 ';
                          }
                            
                   $roomTable.='  <td><button class="btn btn-light btn-sm"  name="showDetails" onclick=" showDetails(\''.$row["BookingId"].'\') "> View </button></td> </tr>';
       }
     }
   else 
   {
   
     $roomTable.='<tr><td colspan="12" style="color:red;text-align:center;">No records are found </td></tr>';
   
   }

    $roomTable.='</tbody>
                 </table></div>';
    
    echo $roomTable;

   } 

  //  -----------------------------------------  Room Payment ------------------------------------

  if(isset($_POST['roomPayment'])){
     
    $paymentTable='<br><br>';
    if(isset($_POST['msg'])){ 
            $paymentTable.='<div class="alert alert-success" role="alert">' . $_POST["msg"].' </div>';
          }
      if (isset($_POST["error"])) {
        $paymentTable.='<div class="alert alert-danger">' . $_POST["error"] . '</div>';
      }
       

        $paymentTable.='<div class="table-responsive">
        <table class="table table-hover " id="userTable">
<thead class="thead-dark">
    <tr >
      <th scope="col">User</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Amount</th>
      <th scope="col">Room Type</th>
      <th scope="col">Room No</th>
      <th scope="col">CheckIn</th>
      <th scope="col">CheckOut</th>
      
    </tr>
  </thead>
  <tbody>';
    
  $filter = $_POST['filter'];

  switch($filter){
    case 1:  $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                inner join room_booking rm on rp.BookingId = rm.BookingId
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                order by rp.PaymentDate desc";
                                break;

    case 2:  $selectPayments =   "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.PaymentType = 'Cash'
                                  order by rp.PaymentDate desc";
                                  break;

    case 3:  $selectPayments =   "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.PaymentType = 'Credit Card'
                                  order by rp.PaymentDate desc";
                                  break;

    case 4:  $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.PaymentType = 'Debit Card'
                                  order by rp.PaymentDate desc";
                                  break;

    case 5:  $selectPayments =   "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.PaymentType = 'Net Banking'
                                  order by rp.PaymentDate desc";
                                  break;

    case 6:  $selectPayments =   "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.Amount < 5000
                                  order by rp.PaymentDate desc";
                                  break;

    case 7:  $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.Amount  >= 5000 AND rp.Amount <=10000
                                  order by rp.PaymentDate desc";
                                  break;

    case 8:  $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.Amount  >= 10000 AND rp.Amount <=15000
                                  order by rp.PaymentDate desc";
                                  break;

    case 9:  $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                  inner join room_booking rm on rp.BookingId = rm.BookingId
                                  inner join room_list rl on rl.RoomId = rm.RoomId
                                  inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                  inner join users_details us on us.Userid = rm.User_id 
                                  where rp.Amount  > 150000 
                                  order by rp.PaymentDate desc";
                                  break;


    default: $selectPayments =  "SELECT rp.*,rm.*,rt.RoomType,rl.RoomNumber,us.FirstName FROM room_payment rp
                                inner join room_booking rm on rp.BookingId = rm.BookingId
                                inner join room_list rl on rl.RoomId = rm.RoomId
                                inner join room_type rt on rl.RoomTypeId = rt.RoomTypeId 
                                inner join users_details us on us.Userid = rm.User_id 
                                order by rp.PaymentDate desc";
                                break;

 }

   $payments = mysqli_query($con,$selectPayments);
   $noOfPayment = mysqli_num_rows($payments);

   if($noOfPayment>=1){
       while($row=mysqli_fetch_assoc($payments))
       {
          
         $paymentTable.=' <tr>
                   
                   <td>'.$row["FirstName"].'</td>
                   <td>'.$row["PaymentDate"].'</td>
                   <td>'.$row["PaymentType"].'</td>
                   <td>'.$row["Amount"].'</td>
                   <td>'.$row["RoomType"].'</td>
                   <td>'.$row["RoomNumber"].'</td>
                   <td>'.$row["CheckIn"].'</td>
                   <td>'.$row["CheckOut"].'</td>
               
                   
               ';

                
       }
     }
   else 
   {
   
     $paymentTable.='<tr><td colspan="12" style="color:red;text-align:center;">No records are found </td></tr>';
   
   }

    $paymentTable.='</tbody>
                 </table></div>';
    
    echo $paymentTable;
  }

?>