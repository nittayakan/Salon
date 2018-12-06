<!Doctype html>
<html>
<head>
<title>ข้อมูลส่วนตัว</title>
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



* {
    box-sizing: border-box;
}

.row {
    display: flex;
}

/* Create two equal columns that sits next to each other */
.column1 {
    flex: 20%;
    padding: 10px;
    height: 400px; /* Should be removed. Only for demonstration */
}
.column2 {
    flex: 50%;
    padding: 20px;
    height:400px;
    margin:10px;
    
}

.bar{
  background-color:#F08080;
}
.w3-content{
  background-color:;
}
.material-icons {vertical-align:-14%}


</style>
<body>
 <!-- Logo ร้าน -->
    <div id="img_container">
        <img src="img/Test3.png" />
    </div>

    <!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
    <div  style="margin-left:1060px;margin-right:150px;">
    <div class="w3-dropdown-hover s2 w3-block w3-white">
      <i class="material-icons ">person</i><b>ParateeUser</b>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="salon_info.php" class="w3-bar-item w3-button w3-pale-red w3-block">ข้อมูลส่วนตัว</a>
         <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ออกจากระบบ</a></div>
        </div>
   </div> 
  </div>



<!-- Navbar -->
    <div class="bar w3-row w3-padding " style="margin-left:150px;margin-right:150px;">
    <div class="w3-col s3 ">
        <a href="test.php" class="w3-button  w3-block "><b>หน้าแรก</b></a>
    </div>
    <div class="w3-col s2">
        <a href="service.php" class="w3-button  w3-block "><b>รายการบริการ</b></a>
    </div>
    <div class="w3-col s2 ">
        <a href="promotion.php" class="w3-button w3-block "><b>โปรโมชั่น</b></a>
    </div>

    
<!-- Navbar ที่มี Dropdown-->
<div class="w3-dropdown-hover  w3-col s2 w3-block">
        <a href="#โปรโมชั่น" class="w3-button  w3-block "><b>จองคิว</b></a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="salon_booking.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">เพิ่มรายการจอง</a>
        <a href="salon_booking_history.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">ประวัติการจอง</a>
   </div>
</div>
    <!-- <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink">ชำระเงิน</a>     
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pink">รายละเอียดการชำระเงิน</a>
         <a href="#แจ้งชำระเงิร" class="w3-bar-item w3-button w3-pink">แจ้งชำระเงิน</a>
   </div>
   </div>   -->
   <div class="w3-col s3">
         <a href="salon_contact.php" class="w3-button   w3-block "><b>ติดต่อเรา</b></a>
   </div>
</div>
<br>

<!-- // แถบข้อมูลส่วนตัว -->
<div class="w3-container w3-card w3-round w3-padding"  style="margin-left:150px;margin-right:150px;">
    <div class="w3-container  w3-round w3-pale-red w3-center" >
      <h3>ข้อมูลส่วนตัว</h3>
    </div><p>
    
	<div class="row">
    <div class="column1" >
    <img src="img/14.png" style="width:300px;height:350px">
    </div>
<div class="column2 w3-card w3-round w3-white"> 	
    <div class="w3-row">
        <div class="w3-col m4">
                                    <p class="w3-right-align">ชื่อ : </p>
                                    <p class="w3-right-align">นามสกุล : </p>
                                    <p class="w3-right-align">ที่อยู่ : </p>
                                    <p class="w3-right-align">E-mail : </p>
                                    <p class="w3-right-align">เบอร์โทรศัพท์ : </p>
                                    <p class="w3-right-align">รหัสบัตรประชาชน : </p>
                                    <p class="w3-right-align">เพศ : </p>
            
         </div>   
    </div>
         <div class="w3-display-container w3-center">
                     <a href="salon_update_info.php" class="w3-button w3-round w3-pale-red  ">แก้ไขข้อมูลส่วนตัว  </a>
                     <a href="salon_change_password.php" class="w3-button  w3-gray  ">เปลี่ยนรหัสผ่าน</a>
         </div>
                
    </div>
</div>
</div>
</div><p>

<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer>





</body>

</head>
</html>