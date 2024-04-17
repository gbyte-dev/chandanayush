<?php $data=13;?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
 

.grid {
	display: grid;
	padding: 1rem;
	width: 100%;
	gap: var(--gap);
	grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
}

.zoom {
	position: fixed;
	inset: 1;
	z-index: 999;
	display: flex;
	align-items: center;
	justify-content: center;
	overflow: hidden;
	isolation: isolate;
}

.zoom-backdrop {
	position: inherit;
	z-index: -1;
	inset: 0;
	background-color: var(--transparent-bg);
	backdrop-filter: blur(var(--blur));
}

.zoom img {
	display: block;
	flex-shrink: 1;
	max-width: 90%;
	max-height: 90%;
	border-radius: var(--border-radius);
	box-shadow: 0 2rem 4rem -1rem var(--transparent-bg);
}

.alt {
	font-family: sans-serif;
	background-color: var(--transparent-bg);
	backdrop-filter: blur(var(--blur));
	position: fixed;
	display: block;
	bottom: 1rem;
	left: 0;
	width: fit-content;
	padding: 0.75em 1rem 0.75rem 3rem;
	border-radius: 0 var(--border-radius) var(--border-radius) 0;
	line-height: 1.3;
	max-width: 90vw;
	color: white;
	z-index: 1000;
}

.alt:empty {
	display: none;
}

.close {
	cursor: pointer;
	position: fixed;
	top: 0;
	right: 1rem;
	border: 0;
	color: white;
	font-size: 0.75rem;
	padding: 1rem 0.75rem 0.5rem;
	border-radius: 0 0 var(--border-radius) var(--border-radius);
	z-index: 1000;
	background-color: var(--transparent-bg);
	backdrop-filter: blur(var(--blur));
	text-orientation: mixed;
	writing-mode: vertical-rl;
	text-transform: uppercase;
	letter-spacing: 0.25em;
}

.close:hover {
	padding-top: 1.5rem;
	color: hsl(0 0% 95%);
}

.prev,
.next {
	cursor: pointer;
	position: fixed;
	z-index: 1000;
	background-color: var(--transparent-bg);
	backdrop-filter: blur(var(--blur));
	border: 0;
	color: white;
	font-family: monospace;
	font-size: 2rem;
	padding: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	width: var(--prev-next-size);
	height: calc(var(--prev-next-size) * 1.2);
	top: calc(50% - calc(var(--prev-next-size) * 0.6));

	transition: all 200ms ease;
}

.prev {
	border-radius: 0 var(--border-radius) var(--border-radius) 0;
	left: 0;
}

.prev:active {
	left: calc(-0.05 * var(--prev-next-size));
}

.next {
	border-radius: var(--border-radius) 0 0 var(--border-radius);
	right: 0;
}

.next:active {
	right: calc(-0.05 * var(--prev-next-size));
}

.showAlt,
.showPrev {
	transition: transform var(--alt-transition-duration) var(--easing);
	transition-delay: var(--transition-delay);
	transform: translateX(0);
}

.hideAlt,
.hidePrev {
	transition: transform var(--alt-transition-duration) var(--easing);
	transition-delay: 0;
	transform: translateX(-200%);
}

.showNext {
	transition: transform var(--alt-transition-duration) var(--easing);
	transition-delay: var(--transition-delay);
	transform: translateX(0);
}

.hideNext {
	transition: transform var(--alt-transition-duration) var(--easing);
	transition-delay: 0;
	transform: translateX(200%);
}

.showClose {
	transition: all var(--close-transition-duration) var(--easing);
	transition-delay: var(--transition-delay);
	transform: translateY(0);
}

.hideClose {
	transition: transform var(--close-transition-duration) var(--easing);
	transition-delay: 0;
	transform: translateY(-200%);
}

.animateZoom {
	--zoom-img-animation-duration: 300ms;
	animation-duration: var(--zoom-img-animation-duration);
	animation-iteration-count: 1;
	animation-timing-function: linear;
	animation-name: animateZoom;
}

@keyframes animateZoom {
	0%,
	100% {
		opacity: 1;
		transform: scale(1);
	}
	50% {
		opacity: 0.5;
		transform: scale(0.8);
	}
}
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

[x-cloak] {
	display: none !important;
}
:root {
	--gap: 1rem;
	--primary-color: hsl(196 100% 33%);
	--secondary-color: hsl(265 100% 33%);
	--border-radius: 0.25rem;
	--blur: 0.5rem;
	--transparent-bg: hsl(0 0% 0% / 0.8);
	--alt-transition-duration: 800ms;
	--close-transition-duration: 600ms;
	--transition-delay: 250ms;
	--easing: cubic-bezier(0, 0.91, 0.45, 1.02);
	--prev-next-size: 4rem;
}

.a {
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100%;
	aspect-ratio: 1;
	position: relative;
	z-index: 1;
	overflow: hidden;
	border-radius: var(--border-radius);
	transition: transform 300ms;
	background-image: linear-gradient(
		-45deg,
		var(--primary-color),
		var(--secondary-color)
	);
}

.a:hover {
	z-index: 2;
	transform: scale(0.98);
}

.a img {
	width: 100%;
	height: 100%;
	opacity: 0.8;
	object-fit: cover;
	filter: grayscale(0.7) brightness(1.2);
	transition: all 800ms var(--easing);
}

.a:hover img {
	transform: scale(1.2);
	filter: grayscale(0) brightness(1);
	opacity: 1;
}

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


    <!-- Hero Start -->
    <div class="container-fluid bg-danger py-5 hero-header mb-5 con">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn"> Our Gallery</h1>
                <a href="https://chandanayushhospital.com" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Gallery</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Gallery Start -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">Our Gallery</h5>
                        <h1 class="display-5 mb-0">Gallery</h1>
                    </div>
        
        <div class="container">
            <body translate="no"> 
  <div x-data="gallery" @openzoom="openZoom = true"> 
	<div class="grid">
		<template x-for="photo in photos" :key="photo.id">
			<a class="a" :href="photo.big" @mouseenter.debounce="zoom = photo.big; alt = photo.alt" @click.prevent="activeId = photo.id; $dispatch('openzoom')">
				<img :src="photo.thumb" :alt="photo.alt">
			</a>
		</template>
		
	</div> 

	<button class="close hideClose" :class="openZoom ? 'showClose' : 'hideClose'" @click="openZoom = false">
		<span x-text="closeLabelText" x-show="showCloseLabel" style="display: none;">close</span>
		<span>×</span>
	</button>
	<button class="prev hidePrev" :class="openZoom &amp;&amp; activeId > 1 ? 'showPrev' : 'hidePrev'" @click="getPrevPhoto">&lt;</button>
	<button class="next hideNext" :class="openZoom &amp;&amp; activeId < photos.length ? 'showNext' : 'hideNext'" @click="getNextPhoto">&gt;</button>

	<div class="alt hideAlt" x-text="alt" :class="openZoom ? 'showAlt' : 'hideAlt'">Meadow</div>
	<div class="zoom" x-show="openZoom" x-transition.opacity.duration.400ms="" style="display: none;">
		<img x-ref="zoomImg" :src="zoom" alt="" x-show="openZoom" x-transition:enter.duration.600ms.delay.200ms="" src="//unsplash.it/id/18/1200/" class="animateZoom" style="display: none;">
		<div class="zoom-backdrop" @click="openZoom = false"></div>
	</div>
</div>



  




 
</div>
        </div>

    <!-- About End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index:1;">
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
	<script>
	// Simple Alpinejs Gallery
	// Author: Maciej Cieslik 
	// Created: 2023-02-14
	document.addEventListener("alpine:init", () => {
		Alpine.data("gallery", () => ({
			showCloseLabel: false, // setting
			closeLabelText: "close", // setting
			zoom: "#",
			activeId: 0,
			alt: "",
			openZoom: false,
			photos: [{
					id: 1,
					thumb: "img/all/cah1.jpeg",
					big: "img/all/cah1.jpeg",
					alt: "Meadow"
				},
				{
					id: 2,
					thumb: "img/all/cah2.jpeg",
					big: "img/all/cah2.jpeg",
					alt: "Mountain trail"
				},
				{
					id: 3,
					thumb: "img/all/cah3.jpeg",
					big: "img/all/cah3.jpeg",
					alt: "Leaves by the river"
				},
				{
					id: 4,
					thumb: "img/all/cah4.jpeg",
					big: "img/all/cah4.jpeg",
					alt: "The road in the fog"
				},
				{
					id: 5,
					thumb: "img/cah5.jpeg",
					big: "img/cah5.jpeg",
					alt: "Cones"
				},
				{
					id: 6,
					thumb: "img/all/cah.jpeg",
					big: "img/all/cah.jpeg",
					alt: "Jars on the fence"
				},
				{
					id: 7,
					thumb: "img/all/gallery1.jpeg",
					big: "img/all/gallery1.jpeg",
					alt: "Jars on the fence"
				},
				{
					id: 8,
					thumb: "img/all/gallery2.jpeg",
					big: "img/all/gallery2.jpeg",
					alt: "Jars on the fence"
				},
				{
					id: 9,
					thumb: "img/all/gallery3.jpeg",
					big: "img/all/gallery3.jpeg",
					alt: "Jars on the fence"
				},
				{
					id: 10,
					thumb: "img/all/gallery44.jpeg",
					big: "img/all/gallery44.jpeg",
					alt: "Jars on the fence"
				},
				
				
				
			],
			timeOut: 300,
			getPrevNext(getWhat) {
				setTimeout(() => {
					this.$refs.zoomImg.classList.remove("animateZoom");
					setTimeout(() => {
						getWhat;
						this.zoom = this.photos.filter(
							(photo) => photo.id == this.activeId
						)[0].big;
						this.alt = this.photos.filter((photo) => photo.id == this.activeId)[0].alt;
						this.$refs.zoomImg.classList.add("animateZoom");
					}, this.timeOut / 2);
				}, this.timeOut / 2);
			},
			getPrevPhoto() {
				this.getPrevNext(this.activeId > 1 ? this.activeId-- : false);
			},
			getNextPhoto() {
				this.getPrevNext(this.activeId < this.photos.length ? this.activeId++ : false);
			}
		}));
	});
</script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.11.1/cdn.js"></script>
      <script id="rendered-js">
// TODO:
// - disable backdrop filter on mobile for better performance
// - scroll to opened image thumb on close
// - add slide animation
// - add touch events
// - add zoom to original size
// - add more settings
// - optimize
//# sourceURL=pen.js
    </script>
</body>

</html>