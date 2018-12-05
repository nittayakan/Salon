<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">      
<title>Service</title>

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
 


 </style>
</head>


<body>



 <!-- Logo ร้าน -->
  <div id="img_container">  
    <img src="img/Test3.png" />
    </div>

<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
<div  style="margin-left:980px;margin-right:150px;">
      <a href="salon_login.php" class="w3-bar-item w3-button">เข้าสู่ระบบ</a>
      <a href="salon_register.php" class="w3-bar-item w3-button">สมัครสมาชิก</a>
</div> 



     <!-- Navbar -->
  <div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px;">
    <div class="w3-col s3">
      <a href="test.php" class="w3-button w3-pink w3-pink w3-block">หน้าแรก</a>
    </div>
    <div class="w3-col s2">
      <a href="service.php" class="w3-button w3-pink w3-pink w3-block">รายการบริการ</a>
    </div>
    <div class="w3-col s2">
      <a href="promotion.php" class="w3-button w3-pink w3-pink w3-block">โปรโมชั่น</a>
    </div>

    <!-- Navbar ที่มี Dropdown-->
        <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">จองคิว</a>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="salon_booking.php" class="w3-bar-item w3-button w3-pale-red">เพิ่มรายการจอง</a>
        <a href="salon_booking_history.php" class="w3-bar-item w3-button w3-pale-red">ประวัติการจอง</a>
        </div>
    </div>
     <!-- <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pale-red w3-pale-red w3-block">ชำระเงิน</a>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
        <a href="#แจ้งชำระเงิน" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
        </div>   -->
    <div class="w3-col s2">
      <a href="salon_contact.php" class="w3-button w3-pink w3-pink w3-block">ติดต่อเรา</a>
    </div>
  </div>
</div>



<br>

<div class="w3-content w3-padding w3-card-4 w3-round " style="width: 100%;"> 
    <div class="w3-container w3-center w3-round w3-pale-red" >
      <h3>รายการบริการ</h3>
    </div><p>
    <div class="w3-container  w3-center" >



  <!-- Service Section -->
  <div class="w3-container w3-padding-10" id="service">
   
  </div>

<!-- /คอลัมภ์แสดงแต่ละรายการบริการ/  -->
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">   
        <img src="img/7.jpg" alt="ทำสีผม" style="width:100%">
        <!-- ปุ่มกดแสดงชื่อการบริการ -->
        <p class="w3-center"><a href="#wedding" class="w3-button w3-light-gray w3-round w3-padding-large w3-lagge w3-block">ทำเล็บ</a></p>
   


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


  <!-- <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        
        <img src="img/9.jpg" alt="House" style="width:99%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-light-gray w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
      
        <img src="img/9.jpg" alt="House" style="width:99%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-pale-red w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
      
        <img src="img/9.jpg" alt="House" style="width:99%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-light-gray w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
       
        <img src="img/9.jpg" alt="House" style="width:99%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-pale-red w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
  </div> -->


</body>
</html>