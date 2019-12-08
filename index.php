<?php
session_start();
error_reporting(0);
include('db/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  contactusform(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your Message as been Sent. We will contact you soon";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Certification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	

	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">HASELDEN & CO NZ LTD</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#practice-section" class="nav-link"><span>ISO Standards
			</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> ISO certification</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Launch your business to another level

			</p>
            <p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light" id="about-section" >
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-6 d-flex order-md-last">
    				<div class="img-about img d-flex align-items-stretch">
	    				<div class="img d-flex align-self-stretch align-items-end" style="background-image:url(images/about.jpg);">
	    					
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pr-lg-5 py-3 py-lg-5">
    				<div class="row justify-content-start py-3 py-lg-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">My name is Jeremy Haselden 
					</h2>
		            <p>Im an expert in ISO transition and certification</p>
		            <p>Activities and Societies: Standards Implementation Providers. We develop, implement and consult within the productive and service commercial sectors. We specialise in the following Standards: ISO 9001:2008 Quality management systems ISO 14001:2004 Environmental management systems ISO 31000:2009 Risk management - Principles and guidelines AS/NZ 4801 Health & Safety Standard ACC Workplace Safety Management Practices Program NZ

					</p>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
	    				<div class="img d-flex align-self-stretch align-items-end" style="background-image:url(images/about-1.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate pb-5">
		          	<span class="subheading">Testimonials</span>
		            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">Our clients</h2>
		          </div>
		          <div class="col-md-12 testimony-section">
								<div class="owl-carousel carousel-testimony">
									<div class="item">
										<div class="testimony-wrap">
				          		<div class="text mb-5">
				          			<div class="icon">
				          				<span class="icon-quote-left"></span>
				          			</div>
				          			<p>Best sertification ever</p>
				          		</div>
				          		<div class="d-flex">
				          			<div class="user-img img mr-3" style="background-image: url(images/person_1.jpg);"></div>
				          			<div>
				          				<p class="name mb-0">Luis Fox</p>
			                    <span class="position">Businessman</span>
				          			</div>
				          		</div>
				          	</div>
									</div>
									<div class="item">
										<div class="testimony-wrap">
				          		<div class="text mb-5">
				          			<div class="icon">
				          				<span class="icon-quote-left"></span>
				          			</div>
				          			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				          		</div>
				          		<div class="d-flex">
				          			<div class="user-img img mr-3" style="background-image: url(images/person_2.jpg);"></div>
				          			<div>
				          				<p class="name mb-0">Luis Fox</p>
			                    <span class="position">Businessman</span>
				          			</div>
				          		</div>
				          	</div>
									</div>
									<div class="item">
										<div class="testimony-wrap">
				          		<div class="text mb-5">
				          			<div class="icon">
				          				<span class="icon-quote-left"></span>
				          			</div>
				          			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				          		</div>
				          		<div class="d-flex">
				          			<div class="user-img img mr-3" style="background-image: url(images/person_3.jpg);"></div>
				          			<div>
				          				<p class="name mb-0">Luis Fox</p>
			                    <span class="position">Businessman</span>
				          			</div>
				          		</div>
				          	</div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-services" id="practice-section">
      <div class="container">
      	<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          
            <h2 class="mb-4">ISO Standards we Certify</h2>
            <p>Full service implementation</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-5 col-lg-3 ftco-animate py-4 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 py-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> ISO 9001</a>

              <a class="nav-link px-4 py-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> ISO 14001</a>

              <a class="nav-link px-4 py-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> ISO 45001</a>



            </div>
          </div>
          <div class="col-md-7 col-lg-9 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-lg-4" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
              	<div class="d-lg-flex">
					<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-shield"></span>
		              </div>
		              <div class="text">
		                <h2 class="mb-4">ISO 9001</h2>
		                <p>ISO 9001 is the standard for Quality Management</p>
		                <p>Essentially this standard is a check of the business management
							Current version of the standard is ISO 9001:2015
							Assistance with implementation of management systems to this standard or transition of management system.</p>
							<p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
              	<div class="d-lg-flex">
					<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-shield"></span>
		              </div>
		              <div class="text">
		                <h2 class="mb-4">ISO 14001 is the standard for Environmental Management</h2>
		                <p>
							Requires review and monitoring of environmental impacts of business operations
							Current version of the standard is ISO 14001:2015
							Assistance with implementation of management systems to this standard or transition of management system.</p>
							<p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-shield"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">ISO 45001 is the standard for Health & Safety Management</h2>
		                <p>
							Requires a formal management systems be in place for the management of Health & Safety
							Current version of the standard is ISO 45001:2018
							Assistance with implementation of management systems to this standard or transition from OHSAS 18001.</p>
							<p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">Contact Us</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
              	<div class="d-lg-flex">
					<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-shield"></span>
	                </div>
	              
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-employee"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Employment Law</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-fire"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Fire Accident</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-money"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Financial Law</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-medicine"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Drug Offenses</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-handcuffs"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Sexual Offenses</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block flaticon-house"></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Property Law</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	

    <section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
      <div class="container" style= "margin-bottom: 50px;"
  >
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
		  <div class="form-group">

<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
else if($msg){?><div class="alert alert-success alert-dismissible fade show"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
  </div>
            <h2 class="mb-4">Contact Us</h2>
            <p>Fell free to ask me</p>
          </div>
        </div>


        
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Somewhere in Christchurch </p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+ 00000000000000</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@haselden.co.nz ">info@haselden.co.nz </a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yoursite.com</a></p>
	          </div>
          </div>
		</div>
		
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">

		  
            <form method="post" id="f" class="bg-primary p-5 contact-form" action="#contact-section">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="fullname" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email" required="required">
			  </div>
			  <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Phone number" name="contactno" required="required">
              </div>
              
              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Message" required="required"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-darken py-3 px-5" name ="send">
			  </div>
			  
			  	
			</form>



			




			<!-- <script>


var form = document.getElementById('f');

function feedback() {
  if (form.checkValidity()) {
	swal({


title: "Good job!",
text: "You clicked the button!",
icon: "success",
button: "Aww yiss!",
});  }
}
			
		</script> -->
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">HASELDEN  <span>& CO NZ LTD </span></h2>
              <p> We develop, implement and consult within the productive and service commercial sectors. We specialise in the following Standards: ISO 9001:2008 Quality management systems ISO 14001:2004 Environmental management systems ISO 31000:2009 Risk management </p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>ISO standarts</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>ISO 9001</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>ISO 14001</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>ISO 45001</a></li>
          
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-0">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">New Zealand</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+0000000000</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@haselden.co.nz </span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Jeremy Haselden 
</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!-- 
  Modal 
 <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
	</div> -->
    
    
    


	  <!-- Contact Us Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="modalAppointmentLabel">Contact Us</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">

          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
             
             <form method="post">
				<div class="form-group">
				  <label for="appointment_name" class="text-black">Full Name</label>
				  <input type="text" class="form-control" id="fullname" required="required" name="fullname">
				</div>
				<div class="form-group">
				  <label for="appointment_email" class="text-black">Email</label>
				  <input type="email" class="form-control" id="emailaddress" required="required" name="email">
				</div>

				<div class="form-group">
					<label for="appointment_email" class="text-black">Phone</label>
					<input type="text" class="form-control" id="phonenumber" required="required" name="contactno">
				  </div>
		
				<div class="form-group">
				  <label for="appointment_message" class="text-black">Message</label>
				  <textarea name="message" id="message" class="form-control" cols="30" rows="10" required="required"></textarea>
				</div>
				<div class="form-group">
				  <input type="submit" value="Send Message" class="btn btn-primary" name="send">
				</div>
			  </form>
			</div>
			
		  </div>
		</div>
	  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>