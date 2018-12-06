<!DOCTYPE html>
<html>
<head>       
<title>กรุณาเข้าสู่ระบบ</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* ตั้งค่าlogo */
     #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
}
/* ตั้งค่าinputข้อมูล */
    input[type=text], input[type=password] {
    width: 50%;
    }
/* ตั้งค่าปุ่มเข้าสู่ระบบ */
   button {
    background-color:	#FFB6C1;
    color: white;
    padding: 15px 25px;
    margin:20px 50px;
    border: none;
    cursor: pointer;
    width: 80%;
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
  <div class="w3-content w3-padding w3-card-4 w3-round-large" style="max-width:600px"> 
    <div class=" w3-padding w3-center w3-round w3-pale-red"style="max-width:600px">
      <h3>กรุณาเข้าสู่ระบบก่อนทำการจอง</h3>
    </div>
    <br>
   <div class="w3-containern w3-center" >
    <label for="uname"><b>Username</b></label><p>
    <input type="text"  name="uname" required><p>

    <label for="psw"><b>Password</b></label><p>
    <input type="password"  name="psw" required><p>

          <div class=" m3 w3-margin-bottom">
            <div class="w3-display-container">
              <a href="salon_register.php" class="w3-button w3-round w3-gray  ">สมัครสมาชิก  </a>
              <a href="Test.php" class="w3-button  w3-pale-red  ">เข้าสู่ระบบ</a>       
            </div>
          </div>
</div>
</div>
<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer>
  



</body>
</html>