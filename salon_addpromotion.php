<!DOCTYPE html>
<html>
<head>       
<title>Add Promotion</title>

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

.bar{
  background-color:#F08080;
}
.w3-content{
  background-color:;
}
.material-icons {vertical-align:-14%}


</style>
</head>
<body>
 <!-- Logo ร้าน -->
    <div id="img_container">
        <img src="img/Test3.png" />
    </div>

    <!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
  <div  style="margin-left:1020px;margin-right:150px;">
    <div class="w3-dropdown-hover s2 w3-block w3-white">
      <i class="material-icons ">person</i><b>NittayakanAdmin</b>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="salon_infoadmin.php" class="w3-bar-item w3-button w3-pale-red w3-block">ข้อมูลส่วนตัว</a>
         <a href="salon_beautician.php" class="w3-bar-item w3-button w3-pale-red w3-block">จัดการพนักงาน</a>
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
        <a href="salon_serviceadmin.php" class="w3-button  w3-block "><b>รายการบริการ</b></a>
    </div>
    <div class="w3-col s2 ">
        <a href="salon_promotionadmin.php" class="w3-button w3-block "><b>โปรโมชั่น</b></a>
    </div>

    
<!-- Navbar ที่มี Dropdown-->
<div class="w3-dropdown-hover  w3-col s2 w3-block">
        <a href="#โปรโมชั่น" class="w3-button  w3-block "><b>จองคิว</b></a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="salon_bookingadmin.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">เพิ่มรายการจอง</a>
        <a href="salon_register_approve.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">อนุมัติการจอง</a>
        <a href="salon_paymentadmin.php" class="w3-bar-item w3-button  w3-block w3-pale-red">การชำระเงิน</a>
        <a href="salon_report.php" class="w3-bar-item w3-button  w3-block w3-pale-red">รายงานการจอง</a>

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
<!-- ฟอร์มเพิ่มบริการ -->


<!-- Page content -->
<div  style="margin-left:150px;margin-right:150px;">



<div class="w3-content w3-padding w3-card-4 w3-round " style="width: 100%;"> 
    <div class="w3-container w3-center w3-round w3-pale-red" >
      <h3>เพิ่มโปรโมชั่น</h3>
</div>
<div class="w3-container  w3-center" >
 <!-- Service Section -->
 <div class="w3-container w3-padding-10" id="service">
 <div class="w3-row">
                                <div class="w3-col m8">
                                    <p class="w3-right-align">ชื่อโปรโมชั่น : <input type="text"  class=" w3-border  "></input></p>
                                    <p class="w3-right-align">คำอธิบาย : <input type="text" class=" w3-border  "></input></p>
                                    <p class="w3-right-align">ระยะเวลาโปรโมชั่น : <input type="text" class=" w3-border  "></input></p>
                                    <p class="w3-right-align">รูปภาพ : <input class=" w3-border  " style="width:350px;" name="imageUpload" type="file" required>
                                    
                                    </p>
                                 </div>                       
                                </div>
                                <a href="promotion.php" class="w3-button w3-round  w3-pale-red "><i class=""></i> เพิ่ม</a>
        <button class="w3-button w3-round w3-amber w3-light-gray" onclick="document.getElementById('subscribe').style.display='block'">ยกเลิก</button>

<form class="w3-container" action="/action_page.php">
 <!-- หน้าต่างที่เด้งขึ้นมาเพื่อกดตกลงหรือยกเลิก -->
 <div id="subscribe" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom w3-padding-large w3-round"style="width:50%;">
   <div class="w3-container w3-white w3-center">
     <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
     <h2>ยืนยันการยกเลิกเพิ่มโปรโมชั่น</h2>
     <div class="w3-container w3-center w3-section ">
     <a href="salon_serviceadmin.php" class="w3-button w3-round w3-pale-red"><i class=""></i>ตกลง</a>
       <a href="salon_addpromotion.php" class="w3-button w3-round w3-grey"><i class=""></i> ยกเลิก</a>
       
     </div>
   </div>
 </div>
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