<!Doctype html>
<html>
<head>
<title>ข้อมูลส่วนตัว</title>
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


</style>

<body>




 <!-- Logo ร้าน -->
 <div id="img_container">
 <img src="img/Test3.png" />

 <!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
 <div  style="margin-left:1080px;margin-right:150px;">
    <div class="w3-dropdown-hover  s2 w3-block">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button w3-white w3-text-pink w3-block " >ParateeUser</a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="salon_info.php" class="w3-bar-item w3-button w3-pale-red w3-block">ข้อมูลส่วนตัว</a>
         <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ออกจากระบบ</a></div>
        </div>
   </div> 
  </div>

<!-- Navbar -->
<div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px;">
        <div class="w3-col s3">
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
        <a href="salon_booking" class="w3-bar-item w3-button w3-pale-red w3-block">เพิ่มรายการจอง</a>
        <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ประวัติการจอง</a>
    </div>
</div>
    <!-- <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-block">ชำระเงิน</a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
            <a href="#แจ้งชำระเงิร" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
   </div>   -->
    <div class="w3-col s2">
         <a href="#ติดต่อเรา" class="w3-button w3-pink  w3-block">ติดต่อเรา</a>
   </div>
</div>
</div>
<br>

<!-- // แถบข้อมูลส่วนตัว -->
<div class="w3-container w3-card w3-round w3-padding"  style="margin-left:150px;margin-right:150px;">
    <div class="w3-container  w3-round w3-pale-red w3-center" >
      <h3>ข้อมูลส่วนตัว</h3>
    </div><p>

    <div class="w3-content w3-round-large "style="width: 100%;">
	<div class="row">
    <div class="column1" >
    <img src="img/13.jpg" style="width:300px;height:380px">
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
 
                                    </p>
                                 </div>   
  </div>
 
  <div class=" w3-right w3-section">
          	   <div class=" m3 w3-margin-bottom">
                <div class="w3-display-container">
                     <a href="Service.php" class="w3-button w3-round w3-pale-red  ">แก้ไขข้อมูลส่วนตัว  </a>
                     <a href="Service.php" class="w3-button  w3-gray  ">เปลี่ยนรหัสผ่าน</a>

</div>
</div>






</body>

</head>
</html>