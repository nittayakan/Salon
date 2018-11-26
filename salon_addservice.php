<!DOCTYPE html>
<html>
<head>       
<title>Ann Beauty</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
 #img_container img{
  height: 200px;
  margin: auto auto;
  display: block;
}
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

* {
    box-sizing: border-box;
}





/* ตั้งค่า input fields */
input[type=text], input[type=text] {
    width: 50%;
    padding: 5px;
    margin: 0px 0 62px 0;
    display: inline-block;
    border: none;
    background: white;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:	#FFDEAD;
    outline: none;
}


/* ตังค่าปุ่ม เพิ่มบริการ */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 0px ;
    border: none;
    cursor: pointer;
    width: 10%;
    opacity: 0.9;
}
.registerbtn:hover {
    opacity: 1;
}


</style>

<body>

<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/Test3.png" />
</div>

<!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
<div  style="margin-left:980px;margin-right:150px;">
      <a href="#เข้าสู่ระบบ" class="w3-bar-item w3-button  ">เข้าสู่ระบบ</a>
      <a href="#สมัครสมาชิก" class="w3-bar-item w3-button">สมัครสมาชิก</a>
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


<!-- ฟอร์มเพิ่มบริการ -->



  <div class=" w3-card-4 w3-round w3-display-bottommiddle w3-center " style="width:108%"  >
  <form action="/action_page.php">
   <div class="w3-container w3-card-4 w3-round w3-display-middle w3-sand" style="width:70%" >
   <p class="w3-left"><a href="#เพิ่มบริการ" class="w3-button w3-green w3-round w3-padding-large w3-lagge w3-block w3-center " >เพิ่มบริการ </a></p>
   
    
    <br><br><br><br> 
    
    <div class="w3-row-padding" style="margin:0 100px;">
        
    <label for="fistname"><b>ชื่อบริการ : </b> </label> 

     <input type="text" div class="w3-padding-10 "> 
     <br>
     <label for="lastname"><b>ราคา : </b> </label> 
     
     <input type="text" placeholder="ระบุนามสกุล" name="lname" required>
     <br>
     <label for="email"><b>ระยะเวลา : </b></label>
     <input type="text" placeholder="ระบุที่อยู่" name="address" required>
     <br>
     
     <label for="email"><b>คำอธิบาย : </b></label>
     <input type="text" name="email" required>
     <br>
     <label for="tel"><b>รูปภาพ : </b></label>
     <input type="text"name="tel" required>
   
     <br>

    <button type="submit" class="registerbtn w3-green w3-round w3-padding-large w3-lagge ">เพิ่ม</button>
    <a href="#ยกเลิก" class="w3-button w3-red w3-round w3-padding-large w3-lagge " >ยกเลิก </a>  </p>
    </div>
    </form>
  </div>
 




</body>
</html>