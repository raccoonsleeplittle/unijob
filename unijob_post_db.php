<?php 

    session_start();
    require_once 'config/db.php';

    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM tab_user WHERE id_card = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['submit-post']))
        {
            $details=$_POST['details']; 
            $work_id = intval( "65" . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $time = $_POST['time']; 
            $user_id = $row['id_card'];
            $price = $_POST['price'];
        try {
            $stmt = $conn->prepare("INSERT INTO tab_announce (details, work_id, start_date, end_date, time, user_id, price)
                                    VALUES ('$details','$work_id','$start_date','$end_date','$time','$user_id','$price')");
            $stmt->bindParam(":details", $details);
            $stmt->bindParam(":work_id", $work_id);
            $stmt->bindParam(":start_date", $start_date);
            $stmt->bindParam(":end_date", $end_date);
            $stmt->bindParam(":time", $time);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":price", $price);
            $stmt->execute();
            $_SESSION['success-post'] = "คุณได้โพสต์งานสำเร็จ";
            header("location: post_status.php");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
