<!DOCTYPE html>
<html>
<head>       
<title>conferm</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

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


/* ตังค่าปุ่ม แก้ไขจองคิว */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa-facebook {
  background: #3B5998;
  color: white;
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
<div class="w3-row w3-padding w3-pale-red"style="margin-left:150px;margin-right:150px;">
<div class="w3-col s2">
 <a href="#หน้าแรก" class="w3-button w3-pale-red w3-pale-red">หน้าแรก</a>
</div>
<div class="w3-col s2">
 <a href="#รายการบริการ" class="w3-button w3-pale-red w3-pale-red">รายการบริการ</a>
</div>
<div class="w3-col s2">
 <a href="#โปรโมชั่น" class="w3-button w3-pale-red w3-pale-red">โปรโมชั่น</a>
</div>

<!-- Navbar ที่มี Dropdown-->
   <div class="w3-dropdown-hover  w3-col s2">
   <a href="#โปรโมชั่น" class="w3-button w3-pale-red w3-pale-red">จองคิว</a>     
 <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="#เพิ่มรายการจอง" class="w3-bar-item w3-button w3-pale-red">เพิ่มรายการจอง</a>
   <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red">ประวัติการจอง</a>
   </div>
</div>
<div class="w3-dropdown-hover  w3-col s2">
   <a href="#โปรโมชั่น" class="w3-button w3-pale-red w3-pale-red">ชำระเงิน</a>     
 <div class="w3-dropdown-content w3-bar-block w3-card-4">
   <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
   <a href="#แจ้งชำระเงิร" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
   </div>
   </div>  
<div class="w3-col s2">
 <a href="#ติดต่อเรา" class="w3-button w3-pale-red w3-pale-red">ติดต่อเรา</a>
</div>
</div>

<br>
<p>

<div class="w3-content w3-padding w3-card-4 w3-round " style="width: 80%;"> 
    <div class="w3-container w3-center w3-round w3-pale-red" >
      <h3>แก้ไขการจองคิว</h3>
    </div><p>
    <div class="w3-container  w3-center" >
     
    <b>เพศ</b><p>
     <select class="w3-select" name="gender"style="width:450px;">
     <option value="" disabled selected>เลือกเพศ</option>
     <option value="1">ชาย</option>
     <option value="2">หญิง</option>
     </select><p>

     <b>บริการ</b><p>
     <select class="w3-select" name="service"style="width:450px;">
     <option value="" disabled selected>เลือกบริการ</option>
     </select><p>

     <b>ผู้ให้บริการ</b><p>
     <select class="w3-select" name="beautician"style="width:450px;">
     <option value="" disabled selected>เลือกช่าง</option>
     </select><p>

        <div class="w3-center ">
         <p>
         <label for="tel"><b>ช่วงเวลา</b></label><p>
         <input type="text"  name="time" required>
         </div>

         <div class="w3-center">
         <p>
         <label for="date"><b>วันที่</b></label><p>
         <input type="text"  name="date" required>
         </div>

        
         <p>
         <label for="tel"><b>เบอร์โทร</b></label><p>
         <input type="text"  name="tel" required><p>

         <p>
         <label for="deposit"><b>ค่ามัดจำการจอง</b></label><p>
         <input type="text"  name="deposit" required>  <b>บาท</b><p>
        
         <div class="w3-container w3-right w3-section ">
        <a href="test.php" class="w3-button w3-round w3-grey"><i class="fas fa-caret-left"></i> ยกเลิก</a>
        <button class="w3-button w3-round w3-amber" onclick="document.getElementById('subscribe').style.display='block'">แก้ไขการจอง</button>
      </div>
        
    </div>  
</div>  

   <b> <br> 
   <div class=" w3-center w3-content w3-padding w3-round w3-pale-red " style="width: 90%;">
     <p>...</p>
   </div> 
  
  <div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large w3-round"style="width:40%;">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2>ยืนยันการแก้ไขการจอง?</h2>
      <div class="w3-container w3-center w3-section ">
        <a href="test.php" class="w3-button w3-round w3-grey"><i class="fas fa-caret-left"></i> ยกเลิก</a>
        <button class="w3-button w3-round w3-amber" onclick="document.getElementById('subscribe').style.display='block'">ตกลง</button>
      </div>
    </div>
  </div>
</div>
  
   
</body>
</html>