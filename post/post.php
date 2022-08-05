<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับจ้าง</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="post_db.php" method="POST">
        <label for="cars">ประเภทงาน</label>
        <select id="job-type" name="job-type">
            <option value="0">กรุณาเลือกประเภทงาน</option>
            <option value="1">รับหิ้ว</option>
            <option value="2">เอกสาร</option>
            <option value="3">คอมพิวเตอร์</option>
        </select> 
<br><br>
        <label for="vol">ราคางาน</label>
        <input type="range" id="vol" name="vol" min="50" max="2000">
<br><br>
        <input type="radio" id="html" name="job-form" value="1">
        <label for="html">งานตอนนี้</label><br>
        <input type="radio" id="css" name="job-form" value="2">
        <label for="css">งานระยะยาว</label><br>
        <input type="radio" id="javascript" name="job-form" value="3">
        <label for="javascript">งานล่วงหน้าภายในวัน</label>
<br><br>
        <label for="firstname" class="form-label">ชื่อผู้จ้าง</label>
        <input type="text" class="form-control" name="user" aria-describedby="user">
<br><br>
        <label for="phone">เบอร์ติดต่อ</label><br><br>
        <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
<br><br>
        <button type="submit" name="post" class="btn btn-primary">ถัดไป</button>
    </form>
</body>
</html>