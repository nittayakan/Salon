<!DOCTYPE html>
<html>
<head>       
<title>updatebooking</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

/* ตั้งค่าlogo */
 #img_container img{
  height:200px;
  margin: auto auto;
  display: block;
}

/* ตั้งค่า input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 5px;
    margin: 3px 0 15px 0;
    display: inline-block;
    background: white;
}
/* ตั้งค่าช่องinputข้อมูล */
input[type=text]:focus, input[type=password]:focus {
    background-color:#FFDEAD;
    outline: none;
}

</style>
</head>
<body>

<div class="w3-right w3-hide-small">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button ">เข้าสู่ระบบ</a>
      <a href="#สมัครสมาชิก" class="w3-bar-item w3-button">สมัครสมาชิก</a>
</div> 

<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/Test3.png" />
</div>

<!-- Navbar -->
<div class="w3-row w3-padding w3-pink"style="margin-left:150px;margin-right:150px;">
<div class="w3-col s2">
 <a href="#หน้าแรก" class="w3-button w3-pink">หน้าแรก</a>
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
 <a href="#ติดต่อเรา" class="w3-button w3-pink">ติดต่อเรา</a>
</div>
</div>

<br>
<p>

<div class="w3-content w3-padding w3-card-4 w3-round-large " style="width: 80%;"> 
    <div class="w3-container w3-center w3-round w3-pale-red" >
      <h3>แก้ไขการจองคิว</h3>
    </div><p>
    <div class="w3-row ">
    <div class="w3-col m8 ">
    <p class="w3-right-align">เพศ :  
      <select class="w3-select w3-right-align w3-border" name="gender" style="width: 50%;">
        <option value="" disabled selected>เลือกเพศ</option>
        <option value="1">ชาย</option>
        <option value="2">หญิง</option>
      </select> </p>
      <p class="w3-right-align">เลือกบริการ :  
      <select class="w3-select w3-right-align w3-border" name="service" style="width: 50%;">
        <option value="" disabled selected>เลือกบริการ</option>
      </select> </p>
      <p class="w3-right-align">เลือกผู้ให้บริการ :  
      <select class="w3-select w3-right-align w3-border" name="service" style="width: 50%;">
        <option value="" disabled selected>เลือกช่าง</option>
      </select> </p>
      <p class="w3-right-align">ช่วงเวลา : <input type="text"></input></p>
      <p class="w3-right-align">วันที่ : <input type="text"></input></p>
      <p class="w3-right-align">เบอร์โทรศัพท์ : <input type="text"></input></p>
      <p class="w3-right-align">ค่ามัดจำการจอง : <input type="text"></input></p>
  
          <div class="w3-container w3-right w3-section">
            <a href="salon_update_booking.php" class="w3-button w3-round w3-grey"> ยกเลิก</a>
            <button class="w3-button w3-round w3-pale-red" onclick="document.getElementById('booking').style.display='block'">แก้ไขการจองคิว</button>
          </div>
     </div>
  </div>
 
</div> 
<div id="booking" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large w3-round"style="width:35%;">
    <div class="w3-container w3-white w3-center">
      
      <h2>ยืนยันการแก้ไขการจองคิว</h2>
     <div class="w3-container w3-center w3-section ">
        <a href="salon_update_booking.php" class="w3-button w3-round w3-grey"> ยกเลิก</a>
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