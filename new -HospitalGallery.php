<?php $data=13;?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
.demo-gallery {
      margin: 20px auto;
      background-color: #ccc;
      width: 360px
      text-align: center;
      
  }
  
  .demo-gallery a {
      display: block;
      float:left;
      margin: 0 12px 12px 0;
      line-height: 0;
  }
  
  
  
  
  
  .demo-gallery img {
      max-width: auto;
    max-width: 100%;
      height: auto;
      border: 0;
      
  }
  
  .demo-gallery figure {
      display: none;
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
    <div class="container-fluid bg-danger py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn"> Our Gallery</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Gallery</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Gallery Start -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	
        
        <div class="container">
					<div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">Our Gallery</h5>
                        <h1 class="display-5 mb-0">Gallery</h1>
                    </div>
					<body>
  
<div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">
            <div class="container">
                        <a  href="https://farm6.staticflickr.com/5591/15008867125_b61960af01_h.jpg" data-size="1600x1068" data-med="https://farm6.staticflickr.com/5591/15008867125_68a8ed88cc_b.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
	          <img src="https://farm6.staticflickr.com/5591/15008867125_68a8ed88cc_m.jpg" alt="">
	          <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                          
	        </a>
              
                        
           <a href="https://farm6.staticflickr.com/5584/14985868676_b51baa4071_h.jpg" data-size="1600x1067" data-med="https://farm6.staticflickr.com/5584/14985868676_4b802b932a_b.jpg" data-med-size="1024x683" data-author="Michael Hull">
	          <img src="https://farm6.staticflickr.com/5584/14985868676_4b802b932a_m.jpg" alt="">
	          <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
	        </a> 
              
           <a href="https://farm4.staticflickr.com/3902/14985871946_24f47d4b53_h.jpg" data-size="1600x1067" data-med="https://farm4.staticflickr.com/3902/14985871946_86abb8c56f_b.jpg" data-med-size="1024x683" data-author="Ales Krivec">
	          <img src="https://farm4.staticflickr.com/3902/14985871946_86abb8c56f_m.jpg" alt="">
	          <figure>This is dummy caption. It is not meant to be read.</figure>
	        </a>
           
           <a href="https://farm4.staticflickr.com/3894/15008518202_c265dfa55f_h.jpg" data-size="1600x1600" data-med="https://farm4.staticflickr.com/3894/15008518202_b016d7d289_b.jpg" data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
	          <img src="https://farm4.staticflickr.com/3894/15008518202_b016d7d289_m.jpg" alt="">
	          <figure>This is dummy caption.</figure>
	        </a>
	          
  
  <a href="https://farm4.staticflickr.com/3920/15008465772_d50c8f0531_h.jpg" data-size="1600x1067" data-med="https://farm4.staticflickr.com/3920/15008465772_383e697089_b.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
	          <img src="https://farm4.staticflickr.com/3920/15008465772_383e697089_m.jpg" alt="">
	          <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
	        </a>
                    
                        
  </div>
  </div>
  
  <!-- Photoswipe 4.0 html code for javascript interface -->
   
   
        
        <!-- Root element of PhotoSwipe. Must have class pswp. --> 
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
            


  
  




 </div>
</div>
        </div>

    <!-- About End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index:0;">
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
					thumb: "iimg/all/cah1.jpeg",
					big: "iimg/all/cah1.jpeg",
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