<!DOCTYPE html>
<html>
<head>       
<title>history</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


 #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
}


</style>

<body>

<div class="w3-right w3-hide-small">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button ">เข้าสู่ระบบ</a>
      <a href="#สมัครสมาชิก" class="w3-bar-item w3-button">สมัครสมาชิก</a>
</div> 

<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/test3.png" />
</div>

<!-- Navbar -->
<div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px;">
<div class="w3-col s2">
 <a href="#หน้าแรก" class="w3-button  w3-pink">หน้าแรก</a>
</div>
<div class="w3-col s2">
 <a href="#รายการบริการ" class="w3-button w3-pink">รายการบริการ</a>
</div>
<div class="w3-col s2">
 <a href="#โปรโมชั่น" class="w3-button w3-pink">โปรโมชั่น</a>
</div>

<!-- Navbar ที่มี Dropdown-->
   <div class="w3-dropdown-hover  w3-col s2">
   <a href="#โปรโมชั่น" class="w3-button w3-pink">จองคิว</a>     
 <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="#เพิ่มรายการจอง" class="w3-bar-item w3-button w3-pink">เพิ่มรายการจอง</a>
   <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pink">ประวัติการจอง</a>
   </div>
</div>
<div class="w3-dropdown-hover  w3-col s2">
   <a href="#โปรโมชั่น" class="w3-button w3-pink">ชำระเงิน</a>     
 <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pink">รายละเอียดการชำระเงิน</a>
   <a href="#แจ้งชำระเงิร" class="w3-bar-item w3-button w3-pink">แจ้งชำระเงิน</a>
   </div>
   </div>  
<div class="w3-col s2">
 <a href="#ติดต่อเรา" class="w3-button w3-pink ">ติดต่อเรา</a>
</div>
</div>
</div>
<br>

<div class="w3-container w3-card w3-round w3-padding"  style="margin-left:200px;margin-right:200px;">
<div class="w3-container  w3-round w3-pale-red" >
      <h3>ประวัติการจองคิว</h3>
    </div><p>

  <table class="w3-table-all w3-hoverable w3-margin"style="width: 90%;">
    <thead>
      <tr class="w3-light-grey">
        <th>ลำดับ</th>
        <th>ชื่อบริการ</th>
        <th>พนักงานให้บริการ</th>
        <th>เบอร์โทรศัพท์</th>
        <th>เพศ</th>
        <th>วันที่จอง</th>
        <th>เวลา</th>
        <th>สถานะการจอง</th>
        <th>สถานะการชำระเงิน</th>
        
        <th></th>
      </tr>
    </thead>
    
    <tr>
      <td>1</td>
      <td>ทำเล็บ</td>
      <td>xxx</td>
      <td>0845266795</td>
      <td>หญิง</td>
      <td>15/01/2562</td>
      <td>9.00</td>
      <td>อนุมัติแล้ว</td>
      <td>ชำระเงินแล้ว</td>
      <td><div class="w3-container w3-right w3-section">
        <a href="salon_update_booking.php" class="w3-button w3-round w3-amber"> แก้ไข</a>
        <button class="w3-button w3-round w3-red" onclick="document.getElementById('booking').style.display='block'">ลบ</button>
      </div></td>
    </tr>
    <tr>
    <td>2</td>
      <td>ตัดผม</td>
      <td>xxx</td>
      <td>0862145321</td>
      <td>หญิง</td>
      <td>15/01/2562</td>
      <td>10.00</td>
      <td>รออนุมัติ</td>
      <td>ชำระเงินแล้ว</td>
      <td><div class="w3-container w3-right w3-section">
        <a href="salon_update_booking.php" class="w3-button w3-round w3-amber"> แก้ไข</a>
        <button class="w3-button w3-round w3-red" onclick="document.getElementById('booking').style.display='block'">ลบ</button>
      </div></td>
    </tr>
    
  </table><p>

</div>
<div id="booking" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large w3-round"style="width:35%;">
    <div class="w3-container w3-white w3-center">
      
      <h2>ยืนยันการลบการจองคิว</h2>
     <div class="w3-container w3-center w3-section ">
        <a href="salon_booking_history.php" class="w3-button w3-round w3-grey"> ยกเลิก</a>
        <button class="w3-button w3-round w3-amber" onclick="document.getElementById('booking').style.display='block'">ตกลง</button>
      </div>
    </div>
  </div>
</div>



<b> <br> 

<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer>

</body>
</html>