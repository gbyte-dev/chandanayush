<?php $data=6;?>
<!DOCTYPE html>
<html lang="en">
 
<head> 
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


<!-- Hero Start -->
<div class="container-fluid bg-danger py-5 hero-header mb-5 con" >
<div class="row py-3">
<div class="col-12 text-center">
<h1 class="display-3 text-white animated zoomIn">Appointment</h1>
<a href="https://chandanayushhospital.com" class="h4 text-white">Home</a>
<i class="far fa-circle text-white px-2"></i>
<a href="" class="h4 text-white">Appointment</a>
</div>
</div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid bg-danger bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
<div class="container">
<div class="row gx-5">
<div class="col-lg-6 py-5">
<div class="py-5">
<h1 class="display-5 text-white mb-4" style="font-size:230%">We Are A Certified and Award Winning Hospital You Can Trust</h1>
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
<option selected>Select A Service</option>
<option>Ayurved</option>
<option>Homeopath</option>
<option>Anorectal</option>
<option>Kshar Sutra's Surgery</option>
<option>Physiotherapy</option>
<option>Acupuncture</option>
<option>Kshar Sutra's Lager Surgery</option>
<option>Anorectal ailments</option>
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
<input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
</div>
<div class="col-12 col-sm-6">
<input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
</div>
<div class="col-12 col-sm-6">
<div class="date" id="date1" data-target-input="nearest">
<input type="text" name="date"
class="form-control bg-light border-0 datetimepicker-input"
placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="time"  id="time1" data-target-input="nearest">
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


<!-- Newsletter Start -->
<div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
<div class="container">
<div class="bg-danger p-5">
<form class="mx-auto" style="max-width: 600px;">
<div class="input-group">
<input type="text" class="form-control border-white p-3" placeholder="Your Email">
<button class="btn btn-dark px-4">Sign Up</button>
</div>
</form>
</div>
</div>
</div>
<!-- Newsletter End -->


<!-- Footer Start -->
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
</body>

</html>