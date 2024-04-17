<?php $data=0;?>
<?php 


if(isset($_POST['subscribe']))
{
	include "mail.php";
	$email=$_POST['email'];
	subscribe($email);

	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
   @media screen and (min-width: 600px) {
	.carousel-inner{
		height:500px;
	}
	.carousel-caption .ist{
		margin-top:-400px;
		
	}
	.carousel-caption .nd{
		
		margin-top:-400px;
	}
	
}
	

}
@media screen and (min-width: 1000px) {
.cont{
	height:600px;
}
	
}
@media screen and (max-width: 1400px) {
.cont{
	height:385px;
	
}
}
@media screen and (min-width: 1400px) {
.cont{
	height:350px;
	
}
  
	
}


.heading{
	font-size:20px;
}


.msg {
    margin-bottom: 1.5rem !important;
    padding-left: 5%;
    padding-right: 5%; 
    padding-top: 0%; 
    padding-bottom: 0%;
    text-align: justify;
	font-size:25px;
	
}
.hd {
    padding-top: 0rem !important;
    padding-bottom
	: 0rem !important;
}
.dr{
	height:550px;
	
}
.timing{
height:400px;
}
.img{
	height:380px; width:100%;
	padding:2%;
}
@media screen and (max-width: 767px) {
	.dr{
	height:auto;
	
	
}
.msg{
	font-size:20px;
}
.img{
	height:200px; width:100%;
}
.container{
    padding-right: var(--bs-gutter-x, 0rem);
    padding-left: var(--bs-gutter-x, 0rem);
}
.row>* {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y);
}
.g-3, .gx-3 {
    --bs-gutter-x: -3rem;
}
.btn{
padding: 0.375rem 0.75rem;
}

}
@media screen and (max-width: 442px) {
	.timing{
height:auto;
}
	
}
@media screen and (min-width: 991px) and (max-width: 1400px) {
	.timing{
height:500px;
}
	
}
@media (min-width: 1200px){
.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1340px;
	
}
.msg {
    margin-bottom: 1.5rem !important;
    padding-left: 5%;
    padding-right: 5%; 
    padding-top: 0%; 
    padding-bottom: 0%;
    text-align: justify;
	font-size:21px;
	
}
.hd {
    padding-top: 0rem !important;
    padding-bottom
	: 0rem !important;
}
.dr{
	height:550px;
	
}
}
@media (max-width: 1200px){
.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1340px;
	
}
.msg {
    margin-bottom: 1.5rem !important;
    padding-left: 0%;
    padding-right: 0%; 
    padding-top: 0%; 
    padding-bottom: 0%;
    text-align: justify;
	font-size:20px;
	
}
.hd {
    padding-top: 0rem !important;
    padding-bottom
	: 0rem !important;
}
.dr{
	height:550px;
	
}
}
@media (max-width: 992px){
.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1340px;
	
}
.msg {
    margin-bottom: 1.5rem !important;
    padding-left: 0%;
    padding-right: 0%; 
    padding-top: 0%; 
    padding-bottom: 0%;
    text-align: justify;
	font-size:20px;
	
}
.hd {
    padding-top: 0rem !important;
    padding-bottom
	: 0rem !important;
}
.dr{
	height:auto;
	
}
}
@media (min-width: 1400px){
.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1340px;
	
}
.msg {
    margin-bottom: 1.5rem !important;
    padding-left: 5%;
    padding-right: 5%; 
    padding-top: 0%; 
    padding-bottom: 0%;
    text-align: justify;
	font-size:25px;
	
}
.hd {
    padding-top: 0rem !important;
    padding-bottom
	: 0rem !important;
}
.dr{
	height:570px;
	
}
}

<!--Gallery Start-->




<!--Gallery End-->	


</style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <?php include('header.php');  ?>
   

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-danger p-3" placeholder="Type search keyword">
                        <button class="btn btn-danger px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
	<div class="con"></div>

    <!-- Carousel Start -->
    <div class="container-fluid  p-0 ">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/all/slider2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 ist" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Body Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Treatment</h1>
                            <a href="appointment.php" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a style="color: white;"href="contact.php" class="btn bg-dark   py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div> 
                <div class="carousel-item">
                     <img class="w-100" src="img/all/slider1.jpg" alt="Image">  
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 nd" style="max-width: 900px; ">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Body Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality  Treatment</h1>
                            <a href="appointment.php" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a style="color: white;"href="contact.php" class="btn bg-dark   py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div> 
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5  ">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-danger d-flex flex-column p-5 timing" >
                        <h6 class="text-white mb-3">O.P.D. Timing</h6>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Tue</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
						<div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Wed</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
						<div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Thu</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
						<div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Fri</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
						<div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sat</h6>
                            <p class="mb-0">Closed</p>
                        </div>
						<div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sun</h6>
                            <p class="mb-0">10.00AM-2.00 PM , 6.00 PM - 7.00PM</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5 timing">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        
						<select class="form-select bg-light border-0 mb-3" style="height: 40px;" required>
                            <option selected disabled>Select A Service</option>
                            <option>Ayurved</option>
                            <option>Homeopath</option>
                            <option>Anorectal</option>
                            <option>Kshar Sutra's Surgery</option>
                            <option>Physiotherapy</option>
                            <option>Acupuncture</option>
                            <option>Dental Surgery</option>
                            <option>Orthopaedic Surgery</option>
                            <option>General Surgery</option>
                            
                        </select>
						<select class="form-select bg-light border-0 mb-3" style="height: 40px;" required>
                            <option selected disabled>Select A Doctor</option>
                            <option>Dr.V.K.Singh</option>
                            <option>Drx. Amresh Kumar Singh</option>
                            <option>Dr. R. Bhatt.</option>
                            <option>Dr.Amrendra Pratap Singh</option>
                            <option>Dr.Archana Singh</option>
                            <option>Dr. Shiva Singh</option>
                            <option>Dr. V.K.Srivastava</option>
                            <option>Prof. Dr.R.K.Khare</option>
                            <option>Dr. Yashwant Singh</option>
                            <option>Dr.Rajes Gupta</option>
                            
                        </select>
                        <a class="btn btn-light" href="doctors.php">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-danger d-flex flex-column p-5 timing">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">We welcome the chance to serve you.</p>
                        <h2 class="text-white mb-0">+0522-3595710
						+08318028902 
						+09415197351
						</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">About Us</h5>
                        <h1 class="">About Chandan Ayush Hospital</h1>
                    </div>
                    <h4 class="text-body  mb-4"> Chandan Ayush Hospital to provide service of the highest standards and unmatched quality and backed by superior capability, revolutionizing the medical field in Uttar Pradesh.</h4>
                    <p class="mb-4">Setting new benchmarks in medicine provides you with experiential service in a caring and compassionate environment. Chandan Ayush Hospital is equipped with State-of-the-art Infrastructure and equipment and a dedicated and highly skilled team of medical professionals.</p>
                    <div class="row g-3" style="margin-left:30px;">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s" >
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Committed Services</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-danger py-3 px-5 mt-4 wow zoomIn" style="margin-left:30px;" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                      <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/all/advt.jpeg" allow="f 	lscreen;" >              
        
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-danger bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4" style="font-size:230%">Chandan Ayush Hospital Lucknow is Certified and Committed Services of Good Quality You Can Trust</h1>
                        <p class="text-white mb-0" style="font-size:180%; padding:5%;padding-top:1%;">To be a center of excellence providing affordable, quality, and unparalleled healthcare experience in all medical specialties.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form action="sendmail.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected disabled>Select A Service</option>
                                        <option>Ayurved</option>
                            <option>Homeopath</option>
                            <option>Anorectal</option>
                            <option>Kshar Sutra's Surgery</option>
                            <option>Physiotherapy</option>
                            <option>Acupuncture</option>
                            <option>Dental Surgery</option>   
                            <option>Orthopaedic Surgery</option>   
                            <option>General Surgery</option>   
									</select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0 mb-3" style="height: 55px;" required>
                            <option selected disabled>Select A Doctor</option>
                            <option>Dr.V.K.Singh</option>
                            <option>Drx. Amresh Kumar Singh</option>
                            <option>Dr. R. Bhatt.</option>
                            <option>Dr.Amrendra Pratap Singh</option>
                            <option>Dr.Archana Singh</option>
                            <option>Dr. Shiva Singh</option>
                            <option>Dr. V.K.Srivastava</option>
                            <option>Prof. Dr.R.K.Khare</option>
                            <option>Dr. Yashwant Singh</option>
                            <option>Dr.Rajes Gupta</option>
                            
                        </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="name" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest" >
                                        <input type="text" name="date"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-">
                <!--<div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/all/ayurved.jpeg" style="object-fit: cover;">
                    </div>
                </div>-->
                <div class="col-lg-12">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality  Services</h1>
                    </div>
                    <div class="row g-12">
					
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <a href="ayurved.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/ayurved.jpeg" style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Ayurveda</h5>
                            </div></a>
                        </div>
						<div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <a href="homeopath.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/homeopath.jpeg" style="height:230px; width:100%"alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Homeopath</h5>
                            </div></a>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.9s">
                            <a href="anorectal.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/anorectal.jpeg"style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Anorectal Surgery</h5>
                            </div></a>
                        </div>
						<div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.9s">
                           <a href="kshar.php"> <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/kshar.png" style="height:230px; width:100%"alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Kshar Sutra's Surgery</h5>
                            </div>
							</a>
                        </div>
						
                    </div>
                </div>
            </div><br>
			<div class="row g-5 mb-">
                <!--<div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/all/ayurved.jpeg" style="object-fit: cover;">
                    </div>
                </div>-->
                <div class="col-lg-12">
                    
                    <div class="row g-12">
					
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <a href="physiotherapy.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid " src="img/all/physiotherapy.jpeg" style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Physiotherapy</h5>
                            </div></a>
                        </div>
						<div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                             <a href="acupuncture.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/acupuncture.jpg"style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Acupuncture</h5>
                            </div></a>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.9s">
                            <a href="dental.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/dentalsurgery.png"style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Surgery</h5>
                            </div></a>
                        </div>
						<div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <a href="orthopaedic.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid " src="img/all/o1.png" style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Orthopaedic Surgery</h5>
                            </div></a>
                        </div>
						
                    </div>
                </div>
            </div><br>
			<div class="row g-5 mb-">
                <!--<div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/all/ayurved.jpeg" style="object-fit: cover;">
                    </div>
                </div>-->
                <div class="col-lg-12">
                    
                    <div class="row g-12">
                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.9s">
                            <a href="generalSurgery.php"><div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/all/g1.png"style="height:230px; width:100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">General Surgery</h5>
                            </div></a>
                        </div>
						<div class="col-lg-9 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-danger rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Raipur road near dr. birendra pratap public inter collage iim road lucknow, Uttar Pradesh 226013 India</p>
                        <h2 class="text-white mb-0">+08318028902</h2>
                    </div>
                </div>
						
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Service End -->
	<!--Gallery Start-->
<?php include'gallery.php';?>

	<!--Gallery End-->

    <!-- Offer Start -->
    <div class="container-fluid  my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center dr">
                <div class="col-lg-6 wow zoomIn dr" data-wow-delay="0.6s" >
                    <div class="offer-text  rounded p-5 dr" style="">
                        <h1 class=" py-5 text-white text-center hd">Message from our founder</h1>
                        <p class="text-white mb-4 text-justify msg" style="">Specialized center for Ayush System of Medicine committed to quality Based treatment at affordable prices  comparatively at less than <50 % Prices in the stream Chandan Ayush Hospital Provides Best Quality Services in Ayurveda , Homeopath and Acupuncture as well as Physiotherapy and Dental Services other than this Medicine and surgery Services Provided under the same roof .</p>
                        
                    </div> 
                </div>
				<div class="col-lg-6 wow zoomIn dr" data-wow-delay="0.6s" >
                    <div class="offer-text text-center p-5 rounded  dr" style=""> 
						<img class="img-fluid img" src="img/all/founder.jpeg"style="" alt="">
                        <h2 class=" text-white">Founder : Dr.Vinay Singh</h2>
                        <h4 class=" text-white">Speciality :B.H.M.S., D.U.M.,N.D.
         Ayurved Shastri,           M.Dip.E.M.S.,         
        Certified   Acupuncturist </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
	<!--external-->
	<div class="container-fluid  my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center ">
                <h1 class="text-center">Why Choose Us</h1>
				<p class="text-center "> Because we are providing Holistic care in ayush system and modern medicine as well includeing Ayurveda,Homeopathy,Nuturopath,acupuncture and modern medicine.Ayurveda is regarded as one the oldest forms of healthcare in the world which aims to maintain positive health. Ayurvedic remedies consist of nothing more than the regular plants and herbs, often, which are used in every day cooking. Even though the base of Ayurveda is very old, many people still hesitate to accept it as the best form of medicine.</p>
				<div class="col-lg-3 wow zoomIn " data-wow-delay="0.6s" >
                    <div class="offer-text  rounded p-4 text-center cont">
                       <img class="img-fluid" src="img/all/authentic.jpg"style="height:150px; width:150; border-radius:50%" alt=""><br><br>
					   <h3 class='text-white heading'>AUTHENTIC TREATMENT </h3>
					   <p class="text-white">A totally comprehensive system; Of Holistic care is more than just a healing method – it is an entire philosophy of life.</p>
                    </div> 
                </div>
				<div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s" >
                    <div class="offer-text  rounded p-4 text-center cont">
                        <img class="img-fluid" src="img/all/perfect.jpg"style="height:150px; width:150; border-radius:50%" alt=""><br><br>
                    <h3 class='text-white heading'>PERFECT ATMOSPHERE</h3>
					   <p class="text-white">The morning practices are cleansing and energizing; they’ll infuse you with a calm sense of presence.</p>
					</div> 
                </div>
				<div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text  rounded p-4 text-center cont">
						<img class="img-fluid" src="img/all/experienced.jpg"style="height:150px; width:150; border-radius:50%" alt=""><br><br>
						<h3 class='text-white heading'>EXPERIENCED DOCTORS</h3>
						<p class="text-white">Chandan Ayush Hospital: Authentic Ayurveda with Experienced Doctors and Comfortable Environment</p>  
                    </div> 
                </div>
				<div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s" >
                    <div class="offer-text  rounded p-4 text-center cont">
						<img class="img-fluid" src="img/all/expert.jpg"style="height:150px; width:150; border-radius:50%" alt=""><br><br>
                        <h4 class='text-white mb-2'>EXPERT THERAPISTS</h4>
						<p class="text-white mb-0">Chandan Ayush Hospital is a specialty center of Holistic care system and ancient Indian healing traditions, in Lucknow.</p>
						
					</div> 
                </div>
            </div>
        </div>
    </div>
	<!--end external-->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-danger bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/dummy.png" style="width:30%" alt="">
                            <p class="fs-5">"Very Nice hospital, Highly trend Medical Team Clean environment,"</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Raghvendra Patel</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/dummy.png" style="width:30%"alt="">
                            <p class="fs-5">"Very good hospital"</p>
                            <hr class="mx-auto w-25"> 
                            <h4 class="text-white mb-0">Arvind Verma</h4>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
			<h1 class="text-center">Meet Our Certified and Professional Doctors</h1>
                <!--<div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">Our Hospital</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                        <a href="appointment.php" class="btn btn-danger py-3 px-5">Appointment</a>
                    </div>
                </div>-->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top drs" style="z-index:1;">
                            <img class="img-fluid rounded-top w-100 drs" src="img/all/dr.vksingh.jpeg" alt="">
                            
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr.V.K.Singh</h4>
                            <p class="text-danger mb-0">B.H.M.S., D.U.M.,N.D.
         Ayurved Shastri,           M.Dip.E.M.S.,         
        Certified   Acupuncturist </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100 drs" src="img/all/amresh.jpeg" alt="">
                            <!--<div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>-->
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Drx. Amresh Kumar Singh</h4>
                            <p class="text-danger mb-0">D.P.T., D.Pharma<br> Physiotherapist and Pharmasis </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100 drs" src="img/all/default.jpg" alt="">
                            <!--<div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-danger btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>-->
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. R. Bhatt.</h4>
                            <p class="text-danger mb-0">M.S. Ay (I.M.S.B.H.U.)
         Senior Consultant   Anorectal and General Surgeon .</p> 
                        </div>
                    </div>
					
                </div>
                
            </div>
			<br>
			<center><a class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInUp " href="doctors.php">See All Doctors List</a></center>
        </div>
    </div>
    <!-- Team End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-danger p-5">
                <form class="mx-auto" style="max-width: 600px;" action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email" name='email' type="post">
                        <button class="btn btn-dark px-4" name="subscribe">Subscribe</button>
                    </div>
                </form>
            </div>  
        </div>
    </div>
    <!-- Newsletter End -->
    

    <?php include('footer.php');  ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<script>

$(window).load (function () { $ (".spinner").fadeOut ("slow") });
</script>
</body>

</html>