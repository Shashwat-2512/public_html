<?php
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-db0f9f92-4780-45c4-a5b1-bdd8cebab47c"></div> 
</head>
<body>
	<section id="call-to-action" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Get Our Service</h3>
            <p class="cta-text">Get the best salon services in your city.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Contact Us</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

 

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp sec-padding">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>For any query do contact us on the given contact number</p>
        </div>

        <div class="row contact-info">
         <div class="col-lg-5"> 
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Bijipur Main road Gosaninuagan Road, Sundar Nagar,Brahmapur,Odisha 760005, India</address>
            </div> 
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">9583677447</a></p>
            </div> 
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">name@website.com</a></p>
            </div> 
		 </div>
		 <div class="col-lg-7">
		      <div class="container">
        <div class="form"> 
		  
		   <!-- Form itself -->
          <form name="sentMessage" class="well" id="contactForm"  novalidate> 
		 <div class="control-group">
                   <div class="form-group">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>

		   </div>
	         </div> 	
                <div class="form-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="form-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
        </div>

      </div>
		 </div>
         

        </div>
      </div>
    
    <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="801" height="365" id="gmap_canvas" src="https://maps.google.com/maps?q=Bijipur%20Main%20Road%20Gosaninuagan%20Road%20sundar%20nagar%20brahmapur%2Codisha%20760005%20india&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  width="100%" height="350"></iframe><a href="https://123movies-en.org">123movie</a></div><style>.mapouter{position:relative;text-align:right;height:365px;width:801px;}.gmap_canvas {overflow:hidden;background:none!important;}</style></div> -->
      <div class="container mb-4 map">
	  <iframe src="https://maps.google.com/maps?q=Bijipur%20Main%20Road%20Gosaninuagan%20Road%20sundar%20nagar%20brahmapur%2Codisha%20760005%20india&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> 
      </div> 
 
    </section>

</body>
</html>

<?php
include ('footer.php');
?>