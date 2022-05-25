<?php include('include/currentPage_header.php') ?>
<br>
<br>
<section id="contact ">
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <div class="bg-white rounded shadow p-4">
                        <iframe class="w-100 rounded mb-4" height="320px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224976.92687983366!2d83.8165328613202!3d28.229651031526632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1649129464800!5m2!1sen!2snp"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h5>Address</h5>
                        <a href="https://goo.gl/maps/savPJkvdnVuvSukF8" target="_blank"
                            class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"> Pokhara, BookingZa ZaTown
                            </i>
                        </a>
                    </div>
                </div>
            </div>

		<div class="col-lg-6 col-md-6 px-4 shadow" style="box-shadow: 5px 10px;">
		<div class="message"></div>
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">Message us for futher support</p>
				<form id="contact-form" action="functions.php" method="post"  autocomplete="off">
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
<?php include('include/footer.php')?>