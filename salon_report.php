<!Doctype html>
<html>

<head>

<title>Report</title>
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

.bar{
  background-color:#F08080;
}
.w3-container{
  background-color:;
}
</style>
<body>

<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/Test3.png" />
</div>

 <!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
 <div  style="margin-left:1020px;margin-right:150px;">
    <div class="w3-dropdown-hover  s2 w3-block w3-white">
    <i class="material-icons ">person</i><b>NittayakanAdmin</b>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="salon_infoadmin.php" class="w3-bar-item w3-button w3-pale-red w3-block">ข้อมูลส่วนตัว</a>
         <a href="salon_beautician.php" class="w3-bar-item w3-button w3-pale-red w3-block">จัดการพนักงาน</a>
         <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ออกจากระบบ</a></div>
        </div>
   </div> 
  </div>

<!-- Navbar -->
     
<div class="bar w3-row w3-padding " style="margin-left:150px;margin-right:150px; " >
    <div class="w3-col s3">
      <a href="test.php" class="w3-button  w3-block"><b>หน้าแรก</b></a>
    </div>
    <div class="w3-col s2">
      <a href="salon_serviceadmin.php" class="w3-button  w3-block"><b>รายการบริการ</b></a>
    </div>
    <div class="w3-col s2">
      <a href="salon_promotionadmin.php" class="w3-button  w3-block"><b>โปรโมชั่น</b></a>
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
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">ชำระเงิน</a>     
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
        <a href="#แจ้งชำระเงิน" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
        </div>   -->
    <div class="w3-col s2">
      <a href="salon_contact.php" class="w3-button  w3-block"><b>ติดต่อเรา</b></a>
    </div>
  </div>
</div>
<br>


<!-- // แถบเรียกดูรายงานการจอง -->
<div class="w3-container w3-card w3-round w3-padding"  style="margin-left:150px;margin-right:150px; ">
    <div class="w3-container  w3-round w3-pale-red w3-center" >
      <h3>รายงานการจอง</h3>
    </div><p>

     <thead>
      <!-- <tr class="w3-light-grey w3-center"> -->
        <th><b>เดือน</b></th>
    </thead>
   <p><p>
    <td><select class="w3-select" name="gender"style="width:95px;"><option value="1" disabled selected>เลือกเดือน</option>
    <option value="1">มกราคม</option>
    <option value="2">กุมภาพันธ์</option>
    <option value="3">มีนาคม</option>
    <option value="4">เมษายน</option>
    <option value="5">พฤษภาคม</option>
    <option value="6">มิถุนายน</option>
    <option value="7">กรกฎาคม</option>
    <option value="8">สิงหาคม</option>
    <option value="9">กันยายน</option>
    <option value="10">ตุลาคม</option>
    <option value="11">พฤศจิกายน</option>
    <option value="12">ธันวาคม</option></td>
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