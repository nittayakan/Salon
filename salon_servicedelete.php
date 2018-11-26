<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">      
<title>Service Delete    </title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
 /* จัดรูปแบบตำแหน่ง Logo */
 #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
  


    



}
 


 </style>
</head>


<body>






 <!-- Logo ร้าน -->
  <div id="img_container">  
    <img src="img/Test3.png" />
    </div>

<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
<div  style="margin-left:1035px;margin-right:150px;">


      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button w3-text-pink" >NittayakanAdmin</a>

      
     




</div> 



     <!-- Navbar -->
     
  <div class="w3-row w3-padding w3-pink" style="margin-left:150px;margin-right:150px; " >
    <div class="w3-col s2">
      <a href="#หน้าแรก" class="w3-button w3-pink w3-pink w3-block">หน้าแรก</a>
    </div>
    <div class="w3-col s2">
      <a href="#รายการบริการ" class="w3-button w3-pink w3-pink w3-block">รายการบริการ</a>
    </div>
    <div class="w3-col s2">
      <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">โปรโมชั่น</a>
    </div>

    <!-- Navbar ที่มี Dropdown-->
        <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">จองคิว</a>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#เพิ่มรายการจอง" class="w3-bar-item w3-button w3-pale-red">เพิ่มรายการจอง</a>
        <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red">ประวัติการจอง</a>
        </div>
    </div>
     <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">ชำระเงิน</a>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
        <a href="#แจ้งชำระเงิน" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
        </div>  
    <div class="w3-col s2">
      <a href="#ติดต่อเรา" class="w3-button w3-pink w3-pink w3-block">ติดต่อเรา</a>
    </div>
  </div>
</div>

<!-- Page content -->
<div  style="margin-left:150px;margin-right:150px;">

  <!-- Service Section -->
  <div class="w3-container w3-padding-10" id="service">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">รายการบริการ</h3>
    <p class="w3-right"><a href="#แก้ไข" class="w3-button w3-green w3-round w3-padding-large w3-lagge w3-block " >เพิ่มบริการ </a></p>

  </div>

<!-- /คอลัมภ์แสดงแต่ละรายการบริการ/  -->


  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">  
          
      <p class="w3-right"><a href="#แก้ไข" class="w3-button w3-yellow w3-round w3-padding-small w3-lagge " >แก้ไข </a>  
      <a href="#ลบ" class="w3-button w3-red w3-round w3-padding-small w3-lagge " >ลบ </a>  </p>
        <img src="img/7.jpg" alt="ทำสีผม" style="width:100%">
        <!-- ปุ่มกดแสดงชื่อการบริการ -->
        <p class="w3-center"><a href="#wedding" class="w3-button w3-gray w3-round w3-padding-large w3-lagge w3-block">ทำเล็บ</a></p>
   
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
      <p class="w3-right"><a href="#แก้ไข" class="w3-button w3-yellow w3-round w3-padding-small w3-lagge " >แก้ไข </a>  
      <a href="#ลบ" class="w3-button w3-red w3-round w3-padding-small w3-lagge " >ลบ </a>  </p>   
        <img src="img/11.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-pink w3-round w3-padding-large w3-lagge w3-block">ทำเล็บ</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
      <p class="w3-right"><a href="#แก้ไข" class="w3-button w3-yellow w3-round w3-padding-small w3-lagge " >แก้ไข </a>  
      <a href="#ลบ" class="w3-button w3-red w3-round w3-padding-small w3-lagge " >ลบ </a>  </p> 
        <img src="img/11.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-gray w3-round w3-padding-large w3-lagge w3-block">ยืดผม</a></p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
      <p class="w3-right"><a href="#แก้ไข" class="w3-button w3-yellow w3-round w3-padding-small w3-lagge " >แก้ไข </a>  
      <a href="#ลบ" class="w3-button w3-red w3-round w3-padding-small w3-lagge " >ลบ </a>  </p> 
        <img src="img/7.jpg" alt="House" style="width:100%">
        <p class="w3-center"><a href="#wedding" class="w3-button w3-pink w3-round w3-padding-large w3-lagge w3-block">อบไอน้ำ</a></p>
      </div>
    </div>
  </div>


 

 <br><br>
 

 <div class=" w3-margin w3-card-4 w3-sand w3-display-bottommiddle" style="width:30%"  >
   <div class="w3-container w3-red w3-round " style="width:100%;">
   <h3>ยืนยันการลบบริการ</h3>
   </div><br>

   <br><br>
   <div class="w3-center w3-large w3-block" style="width:100%"  >
   <p class="w3-center"><a href="#ยืนยัน" class="w3-button w3-yellow w3-round w3-padding-small w3-lagge " >ยืนยัน </a>  
      <a href="#ยกเลิก" class="w3-button w3-red w3-round w3-padding-small w3-lagge " >ยกเลิก </a>  </p>
   <br><br>
  
   </div>
  <form class="w3-container " action="/action_page.php">
   
  
   <label>
    
   </label>
   </form>
 </div>





</body>
</html>