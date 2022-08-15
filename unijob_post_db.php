<?php 
    ob_start();
    session_start();
    include('config/server.php');

            //Check whether the Submit Button is Click or Not
            if(isset($_POST['submit-post']))
            {

                // 1. รับ data จาก form
                $typejob=$_POST['typejob'];
                
                $hireprice = $_POST['hireprice'];
                
                $kindofwork = $_POST['kindofwork'];
                
                $email = $_POST['email']; //อยากจะเปลี่ยนเป็นแบบ auto จาก email ที่เก็บใน session ตอน login
                
                $code = $_POST['code'];

                $phone = $_POST['phone'];

                $details = mysqli_real_escape_string($conn,$_POST['details']);

                // นำข้อมูลเข้า database
                    $sql = "INSERT INTO post_db (typejob, hireprice, kindofwork, name, code, phone, details) VALUES ('$typejob','$hireprice','$kindofwork','$name','$code','$phone','$details')";
                    mysqli_query($conn, $sql);
        
                    header('location: post_status.php'); 
                
            }
                
?>