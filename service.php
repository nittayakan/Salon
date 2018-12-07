<!DOCTYPE html>
<html>
<head>       
<title>Service</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
/* จัดรูปแบบตำแหน่ง Logo */
#img_container img{
  height: 200px;
  margin: auto auto;
  display: block;}

/* ตั้งค่า input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 7px;
    margin: 3px 0 15px 0;
    display: inline-block;
    background: white;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:#FFDEAD;
    outline: none;
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

<br>
<div class="w3-content w3-padding w3-card-4 w3-round " style="width: 100%;"> 
    <div class="w3-container w3-center w3-round w3-pale-red" >
    <h3>รายการบริการ</h3>
    </div><p>
<!-- /คอลัมภ์แสดงแต่ละรายการบริการ/  -->
<div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">   
        <img src="img/7.jpg" alt="ทำสีผม" style="width:100%">
        <!-- ปุ่มกดแสดงชื่อการบริการ -->
        <p class="w3-center"><a href="salon_servicedetail.php" class="w3-button w3-light-gray w3-round w3-padding-large w3-lagge w3-block">ทำเล็บ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        
        <img src="img/11.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="salon_servicedetail.php" class="w3-button w3-pale-red w3-round w3-padding-large w3-lagge w3-block">ทำเล็บ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        
        <img src="img/11.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="salon_servicedetail.php" class="w3-button w3-light-gray w3-round w3-padding-large w3-lagge w3-block">ยืดผม</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
    
        <img src="img/7.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="salon_servicedetail.php" class="w3-button w3-pale-red w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
</div>
</div>












<b> 
<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer>

</body>
</html>