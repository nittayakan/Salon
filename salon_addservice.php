<!DOCTYPE html>
<html>
<head>       
<title>Add Service</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
    margin: 0px  20px 50;
    display: inline-block;
    border: none;
    background: white;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:	#FFDEAD;
    outline: none;
}


/* ตังค่าปุ่ม เพิ่ม */
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
.bar{
  background-color:#F08080;
}
.w3-container{
  background-color:;
}


</style>
<body>

<!-- Logo ร้าน -->
<div id="img_container">
<img src="img/Test3.png" />
</div>

 <!-- // ด้านมุมบนขวา เข้าสู่ระบบและสมัครสมาชิก -->
 <div  style="margin-left:1030px;margin-right:150px;">
    <div class="w3-dropdown-hover  s2 w3-block w3-white">
    <i class="material-icons ">person</i><b>NittayakanAdmin</b>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="salon_info.php" class="w3-bar-item w3-button w3-pale-red w3-block">ข้อมูลส่วนตัว</a>
         <a href="salon_beautician.php" class="w3-bar-item w3-button w3-pale-red w3-block">จัดการพนักงาน</a>
         <a href="#ประวัติการจอง" class="w3-bar-item w3-button w3-pale-red w3-block">ออกจากระบบ</a></div>
        </div>
   </div> 
  </div>


<!-- Navbar -->
     
<div class="bar w3-row w3-padding " style="margin-left:150px;margin-right:150px; " >
    <div class="w3-col s3">
      <a href="test.php" class="w3-button  w3-block"><b>หน้าแรก</b></a>
    </div>
    <div class="w3-col s2">
      <a href="salon_serviceadmin.php" class="w3-button  w3-block"><b>รายการบริการ</b></a>
    </div>
    <div class="w3-col s2">
      <a href="salon_promotionadmin.php" class="w3-button  w3-block"><b>โปรโมชั่น</b></a>
    </div>


<!-- Navbar ที่มี Dropdown-->
<div class="w3-dropdown-hover  w3-col s2 w3-block">
        <a href="#โปรโมชั่น" class="w3-button  w3-block "><b>จองคิว</b></a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="salon_bookingadmin.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">เพิ่มรายการจอง</a>
        <a href="salon_register_approve.php" class="w3-bar-item w3-button  w3-block w3-pale-red ">อนุมัติการจอง</a>
        <a href="salon_paymentadmin.php" class="w3-bar-item w3-button  w3-block w3-pale-red">การชำระเงิน</a>
        <a href="salon_report.php" class="w3-bar-item w3-button  w3-block w3-pale-red">รายงานการจอง</a>

        </div>
    </div>


    <!-- <div class="w3-dropdown-hover  w3-col s2">
        <a href="#โปรโมชั่น" class="w3-button w3-pink w3-pink w3-block">ชำระเงิน</a>     
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#รายละเอียดการชำระเงิน" class="w3-bar-item w3-button w3-pale-red">รายละเอียดการชำระเงิน</a>
        <a href="#แจ้งชำระเงิน" class="w3-bar-item w3-button w3-pale-red">แจ้งชำระเงิน</a>
        </div>
        </div>   -->
    <div class="w3-col s2">
      <a href="salon_contact.php" class="w3-button  w3-block"><b>ติดต่อเรา</b></a>
    </div>
  </div>
</div>


<!-- ฟอร์มเพิ่มบริการ -->


<!-- Page content -->


<br>
    <div class="w3-content w3-padding w3-card-4 w3-round " style="margin-left:200px;margin-right:200px;"> 
        <div class="w3-container w3-center w3-round w3-pale-red " >
            <h3>เพิ่มบริการ</h3>
        </div>
   
 <!-- Service Section -->
    <div class="w3-container w3-center w3-padding-10" id="service">
                            <div class="w3-row">
                                <div class="w3-col m8">
                                    <p class="w3-right-align">ชื่อบริการ : <input type="text"  class=" w3-border  "></input></p>
                                    <p class="w3-right-align">คำอธิบาย : <input type="text" class=" w3-border  "></input></p>
                                    <p class="w3-right-align">ช่วงราคา : <input type="text" class=" w3-border  "></input></p>
                                    <p class="w3-right-align">ระยะเวลาที่ทำ : <input type="text" class=" w3-border  "></input></p>
                                    <p class="w3-right-align">รูปภาพ : <input class=" w3-border  " style="width:350px;" name="imageUpload" type="file" required>
                                    
                                    </p>
                                 </div>                       
                            </div>
    
        <a href="salon_serviceadmin.php" class="w3-button w3-round   w3-pale-red "><i class="fas fa-caret-left"></i> เพิ่ม</a>
        <button class="w3-button w3-round w3-amber w3-light-gray" oncli ck="document.getElementById('subscribe').style.display='block'">ยกเลิก</button>

    </div>  
    </div>
                           
<br>	
<footer class="w3-center  w3-padding-16 w3-opacity ">
  <div class="w3-xlarge w3-section">
   <a href="https://www.facebook.com/pimpa.saunkhaw" class="fa fa-facebook-official w3-hover-opacity w3-large " ></a>
   <a href="" class="fa fa-instagram w3-hover-opacity w3-large"> </a>

  </div>
 
</footer>



    
  








    <!-- <div class="w3-row-padding w3-col m12" style="margin:0 5px;"> 
        <label for="fistname"><b>ชื่อโปรโมชั่น : </b> </label> 
         <input type="text" div class="w3-padding-10 "> 
     </div>    
            <br>
     <div class="w3-row-padding w3-col m12" style="margin:0 5px;">        
            <label for="lastname"><b>รายละเอียด : </b> </label> 
            <input type="text" placeholder="ระบุรายละเอียด" name="lname" required>
            </div>
            <br>
    <div class="w3-row-padding w3-col m12" style="margin:0 5px;">        
        <label for="email"><b>ระยะเวลา : </b></label>
         <input type="text" placeholder="ระบุระยะเวลา" name="address" required>
    </div>
     <br>
   
     <label for="tel"><b>รูปภาพ : </b></label>
     <input type="text"name="" required>
   
     <br>

    <button type="submit" class="registerbtn w3-green w3-round w3-padding-large w3-lagge ">เพิ่ม</button>
    <a href="#ยกเลิก" class="w3-button w3-red w3-round w3-padding-large w3-lagge " >ยกเลิก </a>  </p>
        </div>
    </form>
  </div>
  -->

</body>
</html>