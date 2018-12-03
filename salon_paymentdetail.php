<!DOCTYPE html>
<html>
<head>       
<title>paymentdetail</title>

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
</head>

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

<br>

<div class="w3-content  w3-center w3-padding w3-card-4 w3-round-large  "style="width: 80%;">
    <div class="w3-container  w3-round w3-pale-red" >
      <h3>รายละเอียดการชำระเงิน</h3>
    </div><p>
  <div class="w3-row ">
     <div class="w3-col m4 w3-right-align w3-margin ">
       <p>ชื่อ : 
       <p>นามสกุล : 
       <p>รายการบริการ : 
       <p>ค่ามัดจำการจอง:
     </div>
        <div class="w3-col m13" >
            <p ><img src="img/KTB.jpg" class=" w3-round" alt="ktb" style="width:40px;height:40px;"> เลขบัญชี : xxx-x-xxxxx-x , พร้อมเพย์ : xxx-xxxxxxx</p>
        </div>
        
        <div class="w3-container  w3-margin">
            <a href="salon_payment.php" class="w3-button w3-round w3-pink"> แจ้งชำระเงิน</a><p>
        </div>
    </div>
</div>
<br>

<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>
  </div>
 
</footer>

</body>
</html>