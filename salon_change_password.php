<!DOCTYPE html>
<html>
<head>       
<title>เปลี่ยนรหัสผ่าน</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* ตั้งค่าlogo */
     #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
}
/* ตั้งค่าinputข้อมูล */
    input[type=text], input[type=password] {
    width: 50%;
    }
/* ตั้งค่าปุ่มเข้าสู่ระบบ */
   button {
    background-color:	#FFB6C1;
    color: white;
    padding: 15px 25px;
    margin:20px 50px;
    border: none;
    cursor: pointer;
    width: 80%;
   }
 </style>
</head>
<body>

 <!-- Logo ร้าน -->
 <div id="img_container">
    <img src="img/test3.png" />
 </div>

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
      <a href="#รายการบริการ" class="w3-button  w3-pink  w3-block">รายการบริการ</a>
    </div>
    <div class="w3-col s2">
      <a href="#โปรโมชั่น" class="w3-button w3 w3-pink  w3-block">โปรโมชั่น</a>
    </div>

    <!-- Navbar ที่มี Dropdown-->
    <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button  w3-pink  w3-block">จองคิว</a>     
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
              <a href="#เพิ่มรายการจอง" class="w3-bar-item w3-button w3-pale-red  w3-block">เพิ่มรายการจอง</a>
              <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red  w3-block">ประวัติการจอง</a>
          </div>
    </div>
     <!-- <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink">ชำระเงิน</a>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
        <a href="#แจ้งชำระเงิน" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
        </div>   -->
    <div class="w3-col s2">
      <a href="#ติดต่อเรา" class="w3-button w3-pink  w3-block">ติดต่อเรา</a>
    </div>
  </div>
</div>

  <br><br>
<div class="w3-content w3-padding w3-card-4 w3-round-large" style="max-width:600px"> 
    <div class=" w3-padding w3-center w3-round w3-pale-red"style="max-width:600px">
      <h3>เปลี่ยนรหัสผ่าน</h3>
    </div>
    <br>
    <div class="w3-containern w3-center" >  
    <label for="psw"><b>Password</b></label><p>
    <input type="password"  name="psw" required><p>
    <label for="psw"><b>confirm password</b></label><p>
    <input type="password" name="psw" required><p>
    </div>  	
  <div class=" m3 w3-margin-bottom w3-center">
  <div class="w3-display-container">
    <a href="salon_info.php" class="w3-button w3-round w3-pale-red ">ยืนยัน  </a>
    <a href="salon_info.php" class="w3-button  w3-gray">ยกเลิก</a>       
  </div>
  </div>


  </div><p>
  



</body>
</html>