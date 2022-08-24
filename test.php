<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    
    <link rel="stylesheet" href="style-main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    
</head>
<body>
    <div class="header">
        <img src="img\Unijob.png" class="unijob-logo">
        <a href="main.php" class="header-main">หน้าแรก</a>
        <a href="main.php" class="header-main">เกี่ยวกับ</a>
        <a href="main.php" class="header-main">ข่าวสาร</a>
        <a href="main.php" class="header-main">รีวิว</a>
        <a href="main.php" class="header-main">ดาวโหลด</a>
        <a href="main.php" class="header-main">ศูนย์ช่วยเหลือ</a>
        <a href="login.php" class="header-login">เข้าสู่ระบบ</a>
        <a href="register.php" class="header-sign">ลงทะเบียน</a>


        <div class="row">
              <div class="col-6">
                <label for="exampleInputPassword1">ประเภทงาน</label>
                <select class="form-control" name="typejob">
                  <option>งานทั่วไป</option>
                  <option>งานไอที</option>
                  <option>งานพิมเอกสาร</option>
                  <option>อื่น</option>
                </select>



                <div class="col-6">
                <label for="exampleInputPassword1">ราคาจ้าง</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="จำนวนค่าจ้าง" name="hireprice" required
                oninvalid="this.setCustomValidity('กรุณาใส่ค่าจ้าง')"
                oninput="this.setCustomValidity('')"/>
              </div>
            </div>


    </div>
</body>
</html>
