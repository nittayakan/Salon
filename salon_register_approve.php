<!DOCTYPE html>
<html>
<head>       
<title>Approve</title>

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
</style>
<body>
 <!-- Logo ร้าน -->
    <div id="img_container">
        <img src="img/Test3.png" />
    </div>

<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
    <div  style="margin-left:1035px;margin-right:150px;">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button " >NittayakanAdmin</a>
    </div> 
<!-- Navbar -->
    <div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px;">
    <div class="w3-col s3 ">
        <a href="#หน้าแรก" class="w3-button  w3-pink w3-block">หน้าแรก</a>
    </div>
    <div class="w3-col s2">
        <a href="#รายการบริการ" class="w3-button w3-pink w3-block">รายการบริการ</a>
    </div>
    <div class="w3-col s2 ">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">โปรโมชั่น</a>
    </div>

<!-- Navbar ที่มี Dropdown-->
   <div class="w3-dropdown-hover  w3-col s2 w3-block">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">จองคิว</a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#เพิ่มรายการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">เพิ่มรายการจอง</a>
        <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ประวัติการจอง</a>
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
         <a href="#ติดต่อเรา" class="w3-button w3-pink  w3-block">ติดต่อเรา</a>
   </div>
</div>
<br>

<!-- // แถบอนุมัติการจองคิว -->
<div class="w3-content w3-padding w3-card-4 w3-round " style="margin-left:200px;margin-right:200px;"> 
        <div class="w3-container w3-center w3-round w3-pale-red " >
            <h3>อนุมัติการจองคิว</h3>
        </div>

     <table class="w3-table-all w3-hoverable w3-margin"style="width: 98%;">
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
        <th></th>
        <th></th>
        <!-- <th>สถานะการชำระเงิน</th> -->
        <th></th>
      </tr>
    </thead>
    
    <tr>
      <td>1</td>
      <td>ทำเล็บ</td>
      <td>xxx</td>
      <td>0845266795</td>
      <td>หญิง</td>
      <td>15/01/62</td>
      <td>9.00</td>
      <td><select class="w3-select" name="gender"style="width:80px;" >  <option value="" disabled selected>อนุมัติ</option>
    <option value="1">อนุมัติ</option>
    <option value="2">ไม่อนุมัติ</option></td><p>
    


      <!-- <td><select class="w3-select" name="gender"style="width:80px;" >  <option value="" disabled selected>สถานะ</option>
     <option value="1">ชำระเงินแล้ว</option>
    <option value="2">ยังไม่ชำระเงิน</option></td><p> -->

       <td><div class=" w3-right ">    
      <a href="salon_booking_hiatory.php" class="w3-button w3-round  w3-red"><i class=""></i> ตกลง</a>
      <td><div class=" w3-right "> 
      <a href="salon_booking.php" button class="w3-button w3-round w3-amber w3-gray w3-block" onclick="document.getElementById('register').style.display='block'">แก้ไข</button> 
      </div></td>
      
    <tr>
    <td>2</td>
      <td>ตัดผม</td>
      <td>xxx</td>
      <td>0862145321</td>
      <td>หญิง</td>
      <td>15/01/62</td>
      <td>10.00</td>
      <td><select class="w3-select" name="gender"style="width:80px;" >  <option value="" disabled selected>อนุมัติ</option>
    <option value="1">อนุมัติ</option>
    <option value="2">ไม่อนุมัติ</option></td><p></td>
      <!-- <td><select class="w3-select" name="gender"style="width:80px;" >  <option value="" disabled selected>สถานะ</option>
    <option value="1">ชำระเงินแล้ว</option>
    <option value="2">ยังไม่ชำระเงิน</option></td><p></td> -->
      <td><div class=" w3-right ">    
      <a href="salon_booking_hiatory.php" class="w3-button w3-round  w3-red"><i class=""></i> ตกลง</a>
      <td><div class=" w3-right "> 
      <a href="salon_booking.php" button class="w3-button w3-round w3-amber w3-gray w3-block" onclick="document.getElementById('register').style.display='block'">แก้ไข</button> 
      </div></td>
     
    </tr> 
    
  </table>
  </div> <p><p>
</div>



<!-- <b> <br> 
<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer> -->

</body>
</html>