<?php
    session_start();
    include('server.php');

    $errors = array();

    // รับค่าจาก form

    if (isset($_POST['post'])) {
        $typejob = mysqli_real_escape_string($conn, $_POST['typejob']);
        $hireprice = mysqli_real_escape_string($conn, $_POST['hireprice']);
        $kindofwork = mysqli_real_escape_string($conn, $_POST['kindofwork']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $code = mysqli_real_escape_string($conn, $_POST['code']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $details = mysqli_real_escape_string($conn, $_POST['details']);

        echo $hireprice;
        echo $typejob;
        echo $kindofwork;
        echo $name;
        echo $code;
        echo $phone;
        echo $details;

        // ตรวจสอบว่ามีค่าที่ว่างไหม

        if (empty($typejob)) {
            array_push($errors, "กรุณาใส่ประเภทงาน");
        }
        if (empty($hireprice)){
            array_push($errors, "กรุณาใส่ราคางาน");
        }
        if (empty($hireprice)){
            array_push($errors, "กรุณาใส่รูปแบบงาน");
        }
        if (empty($name)){
            array_push($errors, "กรุณาใส่ชื่อผู้จ้าง");
        }
        if (empty($phone)){
            array_push($errors, "กรุณาใส่เบอร์โทร");
        }
        if (empty($details)){
            array_push($errors, "กรุณารายละเอียดงาน"); 
        }

        // ถ้าไม่มี error ก็จะนำข้อมูลเข้า database

        if (count($errors) == 0) {
            $sql = "INSERT INTO post_db (typejob, hireprice, kindofwork, name, code, phone, details) VALUES ('$typejob','$hireprice','$kindofwork','$name','$code','$phone','$details')";
            mysqli_query($conn, $sql);

            $_SESSION['success'] = "คุณใส่ข้อมูลจ้างงานสำเร็จ";
            header('location: post.php'); 
        } else {
            array_push($errors, "คุณใส่ข้อมูลไม่ครบ");
            $_SESSION['error'] = "คุณใส่ข้อมูลไม่ครบ";
            header("location: post.php");
        }
    }

    
?>
