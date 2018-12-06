<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">      
<title>Ann Beauty</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
         /* จัดรูปแบบตำแหน่ง Logo */
     #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
}
 
/* // Slides */

 * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* จัดรูปภาพ Slides */
.slideshow-container {
  max-width: 1350px;
  position: relative;
  margin: auto;
}

/* ปุ่มกดไปรูปต่อไป */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* ตำแหน่งปุ่มถัดไปด้านขวา */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

}
.bar{
  background-color:#F08080;
}
.w3-container{
  background-color:;
}

.bar {
  background-color:#F08080;
}

</style>

<body>


<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/test3.png" />
</div>

<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
<div  style="margin-left:970px;margin-right:150px;">
      <a href="salon_login.php" class="w3-bar-item w3-button"><b>เข้าสู่ระบบ</b></a>
      <a href="salon_register.php" class="w3-bar-item w3-button"><b>สมัครสมาชิก</b></a>
</div>

<!-- Navbar -->
<div class="bar w3-row w3-padding " style="margin-left:150px;margin-right:150px;">
<div class="w3-col s3">
<a href="test.php" class="w3-button  w3-block"><b>หน้าแรก</b></a>
</div>
<div class="w3-col s2">
 <a href="service.php" class="w3-button w3-block"><b>รายการบริการ</b></a>
</div>
<div class="w3-col s2">
 <a href="promotion.php" class="w3-button w3-block"><b>โปรโมชั่น</b></a>
</div>

<!-- Navbar ที่มี Dropdown-->
   <div class="w3-dropdown-hover  w3-col s2">
   <a href="" class="w3-button w3-block"><b>จองคิว</b></a>     
 <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="salon_login_register.php" class="w3-bar-item w3-button w3-pale-red w3-block">เพิ่มรายการจอง</a>
   <a href="salon_login_register.php" class="w3-bar-item w3-button w3-pale-red w3-block">ประวัติการจอง</a>
   </div>
</div>


<div class="w3-col s2">
 <a href="salon_contact.php" class="w3-button w3-block"><b>ติดต่อเรา</b></a>
</div>
</div>
</div>

<!-- // slide show -->


<div class="slideshow-container" style="margin-left:150px;margin-right:150px;">

<!-- <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/5.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div> -->

<div class="mySlides fade">
  
  <img src="img/6.jpg" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>
<div class="mySlides fade">
  <img src="img/4.jpg" style="width:100%"> 
</div>

<div class="mySlides fade">
  <img src="img/3.png" style="width:100%">
 
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>





</body>
</html>