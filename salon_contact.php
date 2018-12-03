<!DOCTYPE html>
<html>
<head>       
<title>contact</title>

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
    height: 300px; /* Should be removed. Only for demonstration */
}
.column2 {
    flex: 50%;
    padding: 20px;
    height:300px;
    margin:10px;
    
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

<div class="w3-content  w3-padding w3-card w3-round-large w3-pale-red "style="width: 75%;">
	<div class="row">
      <div class="column1" >
        <img src="img/frontshop.jpg" class="w3-hover-opacity w3-round" style="width:300px;height:280px;">
      </div>
    <div class="column2 w3-card w3-round w3-white">
     <div class="w3-row ">
        <div class="w3-col ">
        <h2 class="w3-text-gray">Contact Me</h2>
        <hr style="width:200px;" >
        <p><i class="fa fa-fw fa-map-marker w3-xlarge " ></i> ร้านพี่แอน บิวตี้</p>
        <p><i class="fa fa-home fa-fw  w3-xlarge "></i> หน้าป้อมตำรวจ อ.นาหม่อม จ.สงขลา</p>
        <p><i class="fa fa-fw fa-phone w3-xlarge  "></i> xxx-xxxxxxx</p> 
        
        
        </div>
    </div>       
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