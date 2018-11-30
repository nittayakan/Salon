<!Doctype html>
<html>

<head>

<title>Report</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/* จัดรูปแบบตำแหน่ง Logo */
#img_container img{
  height: 200px;
  margin: auto auto;
  display: block;}

  
</style>
<body>
 <!-- Logo ร้าน -->
 <div id="img_container">
 <img src="img/Test3.png" />
 </div>
<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
<div  style="margin-left:1005px;margin-right:150px;">
<div class="w3-dropdown-hover w3-col s2 w3-top">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button w3-white w3-text-pink w3-block " >NittayakanAdmin</a>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="" class="w3-bar-item w3-button w3-pale-red">ข้อมูลส่วนตัว</a>
      <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red">ออกจากระบบ</a></div>
</div>
</div> 
    

</div>

<!-- Navbar -->
<div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px;">
        <div class="w3-col s2">
        <a href="#หน้าแรก" class="w3-button  w3-pink w3-block">หน้าแรก</a>
        </div>
        <div class="w3-col s2">
        <a href="#รายการบริการ" class="w3-button w3-pink w3-block">รายการบริการ</a>
        </div>
        <div class="w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">โปรโมชั่น</a>
</div>

<!-- Navbar ที่มี Dropdown-->
   <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">จองคิว</a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="salon_booking" class="w3-bar-item w3-button w3-pale-red">เพิ่มรายการจอง</a>
        <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red">ประวัติการจอง</a>
        </div>
    </div>
    <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">ชำระเงิน</a>     
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
         <a href="#แจ้งชำระเงิร" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
   </div>
   </div>  
   <div class="w3-col s2">
         <a href="#ติดต่อเรา" class="w3-button w3-pink  w3-block">ติดต่อเรา</a>
   </div>
   </div>
</div>
<br>

<!-- // แถบเรียกดูรายงานการจอง -->
<div class="w3-container w3-card w3-round w3-padding"  style="margin-left:150px;margin-right:150px;">
    <div class="w3-container  w3-round w3-pale-red w3-center" >
      <h3>เรียกดูรายงานการจอง</h3>
    </div><p>

     <thead>
      <tr class="w3-light-grey">
        <th><b>เดือน</b></th>
        <th><b>ปี</b></th>
    </thead>
    <br>
    <td><select class="w3-select w3-center " name="gender"style="width:95px;" ><option value="" disabled selected>เลือกเดือน</option>
    <option value="1">ชำระเงินแล้ว</option>
    <option value="2">ยังไม่ชำระเงิน</option></td><p>


      <a href="#สมัครสมาชิก" class="w3-bar-item w3-button"><b>ปี</b></a>

</div>




</body>
</head>
</html>