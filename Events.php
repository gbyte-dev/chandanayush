<?php $data=15;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
	*{
	box-sizing: border-box;
}

html {
	font-size: 100%;
}

body {
	max-width: ;
	margin: 0 auto; 
	font-size: 1rem;
	line-height: 1.3;
	background-color: #f5f5f5;
}

h1, h5 {
	padding: 0.5rem;
}

.center {
	text-align: center;
}

/*Flexbox Cards*/
.cards {
	display: flex;
	flex-flow: row wrap;
}

.card-item {
	display: flex;
	width: 100%;
	padding: 0.5em;
}

/* ===== == = === 37.5em (600px) === = == ===== */
@media all and (min-width: 37.5em) {
	.card-item {
			width: calc(100% / 12 * 6 );
	}
}
/* ===== == = === 56.25em (900px) === = == ===== */
@media all and (min-width: 56.25em) {
	.card-item {
			width: calc(100% / 12 * 4 );
	}
}

.card-body {
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	width: 100%;
	padding: 0;
	background-color: #F8FFF8;
	border-radius: 3px;
	box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

.card-body p {
	flex: 1 0 auto;
	margin: 0;
}

.card-img {
	width: 100%;
	border-radius: 3px 3px 0 0;
}

.card-img:hover {
	opacity: 0.8;
}

.card-title,
.card-text,
.card-footer {
	padding: 1em 1em 0;
}

.card-footer {
	margin-bottom: 1em;
}

.btnn {
	display: inline-block;
	margin: 1rem;
	padding: .75rem 1.25rem;
	font: 700 1rem/1.2 Verdana, sans-serif;
	letter-spacing: .05rem;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(77,77,77,.5);
	background: #1E90FF;
	border-radius: .25rem;
	box-shadow: 0 0 1px 1px rgba(77,77,77,.5);
	color: floralwhite;
	cursor: pointer;
	transition: .5s;
}

.btn:hover {
	background: #ADD8E6;
	color: #333;
}
	</style>
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
                <h1 class="display-3 text-white animated zoomIn">Events</h1>
                <a href="https://chandanayushhospital.com" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Events</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
	<h1 class="center">Equal Height Cards with CSS Flexbox</h1>
	<h5 class="center">Images, Title, Text and Footer each at the same level</h5>
	<div class="cards">
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=480" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
			</div>
		</div>
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=481" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
			</div>
		</div>
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=482" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
			</div>
		</div>
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=483" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
			</div>
		</div>
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=484" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
			</div>
		</div>
		<div class="card-item">
			<div class="card-body">
				<img class="card-img" src="https://picsum.photos/250/200?image=485" alt="" />
				<h2 class="card-title center">Title</h2>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eveniet.</p>
				<div class="card-footer center">
					<a class="btnn btn-primary" href="">Details</a>
				</div>
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