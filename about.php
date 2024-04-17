<?php $data=1;?>
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
    <div class="container-fluid bg-danger py-5 hero-header mb-5 con">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="https://chandanayushhospital.com" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">About Us</h5>
                        <h1 class="">About Chandan Ayush Hospital</h1>
                    </div> 
                    <h4 class="text-body  mb-4">Chandan Ayush Hospital to provide service of the highest standards and unmatched quality and backed by superior capability, revolutionizing the medical field in Uttar Pradesh.</h4>
                    <p class="mb-4">Setting new benchmarks in medicine provides you with experiential service in a caring and compassionate environment. Chandan Ayush Hospital  is equipped with State-of-the-art Infrastructure and equipment and a dedicated and highly skilled team of medical professionals. Having about 20yeard experience in the field of ayush system of medicine specialy in the field of anorectal surgery like Pile,Fistula,Fissure,perianal abscess and other surgeries specialized Ayush surgeon from I.M.S.B.H.U. and also facilities in modern medicine including medicine and surgery both.<br> And in other specialities also as well as  on call consultant available. We are always connected with you (our patients) physically & emotionally as well as  sentimentally from Healing of you and your near and Dear ones.<br> apart form professionally you can trust and  share anything about your illness & other troubles without hesitation & feel free from douts.We are providing services at lowest prices considering your financial troubles & even some what your difficulties to cope with the diseased conditions.</p>
                    <h4 class="text-body  mb-4 text-uppercase text-danger">Good quality services at affordable nominal price. </h4>
					<div class="row g-3" style="margin-left:30px;">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Committed Services</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">  
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-danger me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.php" style="margin-left:30px;" class="btn btn-danger py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

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