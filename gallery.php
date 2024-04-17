<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Lato', sans-serif;
  height: 100vh;
}

.slider-container {
  position: relative;
  overflow: hidden;
  width: 100vw;
  height: 100vh;
}

.left-slide {
  height: 100%;
  width: 35%;
  position: absolute;
  top: 0;
  left: 0;
  transition: transform 0.5s ease-in-out;
}

.left-slide > div {
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.left-slide h1 {
  font-size: 40px;
  margin-bottom: 10px;
  margin-top: -30px;
}

.right-slide {
  height: 100%;
  position: absolute;
  top: 0;
  left: 35%;
  width: 65%;
  transition: transform 0.5s ease-in-out;
}

.right-slide > div {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100%;
  width: 100%;
}

button {
  background-color: #fff;
  border: none;
  color: #aaa;
  cursor: pointer;
  font-size: 16px;
  padding: 15px;
}

button:hover {
  color: #222;
}

button:focus {
  outline: none;
}

.slider-container .action-buttons button {
  position: absolute;
  left: 35%;
  top: 50%;
  z-index: 100;
}

.slider-container .action-buttons .down-button {
  transform: translateX(-100%);
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.slider-container .action-buttons .up-button {
  transform: translateY(-100%);
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
.sl{
text-align:;
color:black;
font-size:25px;
padding-top:10%;
padding-left:20%;
padding-right:20%;

}
.list li{
color:black;
font-size:25px;
padding-left:20%;
padding-right:20%;
} 

@media screen and (max-width: 1096px) {
.sl{
text-align:;
color:black;
font-size:15px;
padding-top:0%;
padding-left:5%;
padding-right:5%;
}
.list li{
color:black;
font-size:15px;
padding-left:5%;
padding-right:5%;
} 
}
@media screen and (max-width: 767px) {
.sl{
text-align:;
color:black;
font-size:13px;
padding-top:0%;
padding-left:0%;
padding-right:0%;
}
.list li{
color:black;
font-size:13px;
padding-left:0%;
padding-right:0%;
} 
}



</style>
</head>
<body>
    <div class="container-fluid  my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
			<div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-danger text-uppercase">Our Gallery</h5>
                        <h1 class="display-5 mb-0">Gallery</h1>
                    </div>
                <div class="slider-container">
      <div class="left-slide">
        <div style="background-color: #fde">
          <h1>Why Us ?</h1>
          <p class="sl">At  Chandan Ayush Hospital we are committed to providing our patients with advanced medical and surgical treatments with access to the latest treatment technology available.</p>
        </div>
        <div style="background-color: rgb(254,160,0)">
          <h1>Top Doctors</h1>
          <p class="sl">Our diverse team of experienced and renouned physicians and surgeons share a common passion to prove the highest quality of care.</p>
        </div>
        <div style="background-color: rgb(231, 58, 95)">
          <h1>24 Hours Service</h1>
          <p class="sl">Fully equipped to offer medical assistance for all kinds of emergencies including pediatrics .</p>
        </div>
        <div style="background-color: rgb(176, 136, 240)">
          <h1>Affordable Treatment</h1>
          <p class="sl">We believe that treatment does not have to be expensive to be effective and so we offer the best treatment to all sections of society</p>
        </div>
		<div style="background-color: rgb(102, 255, 153)">
          <h1>Emergency Help</h1>
          <p class="sl">Get Emergency Care treatment by our team of highly-qualified & experienced Emergency Care</p>
        </div> 
		<div style="background-color: #fde">
          <h1>Our Vision</h1>
          <p class="sl">To Set A Benchmark Of Excellence In Advanced, Hi-tech And Multi Disciplinary Medical Services In Asia, Along With High Quality Health Care And Tertiary Care Facilities.</p>
        </div>
        <div style="background-color: rgb(254,160,0)">
          <h1>Our Mission</h1>
          <p class="sl">The Mission Of Chandan Ayush Hospital Hospital Is To Provide Quality Healthcare With Compassion And Efficiency.
To Apply And Share New Technologies.
To Promote An Environment In The Hospital That Facilitates Protection Of Patient’s Right And Commitment Towards Patient Care.</p>
        </div>
        <div style="background-color: rgb(231, 58, 95)">
          <h1>Centrally located</h1>
          <p class="sl">Located in the heart of the city, the hospital is easily accessible easily accessible by both car and public transport.</p>
        </div>
        <div style="background-color: rgb(176, 136, 240)">
          <h1>Helpful Staff</h1>
          <p class="sl">Our fully trained, knowledgeable, and humble team of staff is always ready to provide the best possible support. </p>
        </div>
		<div style="background-color: #fde">
          <h1>Values</h1>
          <p ><ul class="list">
		  <li>Leadership</li>
				<li>Moral </li>
				<li>Respondibility</li>
				<li>capability</li>
				<li>Excellence</li>
				<li>Innovation</li>
				<li>Partnership</li>
				<li>Honesty</li></ul></p>
        </div>
		
      </div>
      <div class="right-slide">
        <div style="background-image: url('img/cah5.jpeg');"></div>
        <div style="background-image: url('img/all/gallery.jpeg');"></div>
        <div style="background-image: url('img/all/gallery1.jpeg');"></div>
        <div style="background-image: url('img/all/gallery2.jpeg');"></div>
        <div style="background-image: url('img/all/gallery3.jpeg');"></div>
        <div style="background-image: url('img/all/cah.jpeg');"></div>
		<div style="background-image: url('img/all/cah1.jpeg');"></div>
        <div style="background-image: url('img/all/cah2.jpeg');"></div>
        <div style="background-image: url('img/all/cah3.jpeg');"></div>
        <div style="background-image: url('img/all/cah4.jpeg');"></div>
       
      </div>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </div>
            </div>
        </div>
    </div>
<script>
const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide')
const slideLeft = document.querySelector('.left-slide')
const upButton = document.querySelector('.up-button')
const downButton = document.querySelector('.down-button')
const slidesLength = slideRight.querySelectorAll('div').length

let activeSlideIndex = 0

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

upButton.addEventListener('click', () => changeSlide('up'))
downButton.addEventListener('click', () => changeSlide('down'))

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
        activeSlideIndex++
        if(activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0
        }
    } else if(direction === 'down') {
        activeSlideIndex--
        if(activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
}

</script>
</body>


</html>