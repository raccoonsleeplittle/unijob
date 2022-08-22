<?php 
    // ob_start();
    // session_start();
    // // require_once 'config/db.php';
    // include('config/server.php');

            //Check whether the Submit Button is Click or Not
            // if(isset($_POST['submit-post']))
            // {

            //     // 1. รับ data จาก form
            //     $typejob=$_POST['typejob'];
                
            //     $hireprice = $_POST['hireprice'];
                
            //     $kindofwork = $_POST['kindofwork'];
                
            //     $email = $_POST['email']; //อยากจะเปลี่ยนเป็นแบบ auto จาก email ที่เก็บใน session ตอน login
                
            //     $code = $_POST['code'];

            //     $phone = $_POST['phone'];

            //     $details = mysqli_real_escape_string($conn,$_POST['details']);

            //     // นำข้อมูลเข้า database
            //         $sql = "INSERT INTO post_db (typejob, hireprice, kindofwork, name, code, phone, details) VALUES ('$typejob','$hireprice','$kindofwork','$name','$code','$phone','$details')";
            //         mysqli_query($conn, $sql);
        
            //         header('location: post_status.php'); 
                
            // }
                
?>

<?php 

    session_start();
    require_once 'config/db.php';

    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST['submit-post']))
        {

            // 1. รับ data จาก form
            $typejob=$_POST['typejob']; 
            $hireprice = $_POST['hireprice'];
            $kindofwork = $_POST['kindofwork'];
            $email = $row['email'];
            $code = $_POST['code'];
            $phone = $_POST['phone'];
            $details = $_POST['details']; 
        try {
            $stmt = $conn->prepare("INSERT INTO post_db (typejob, hireprice, kindofwork, email, code, phone, details)
                                    VALUES ('$typejob','$hireprice','$kindofwork','$email','$code','$phone','$details')");
            $stmt->bindParam(":typejob", $typejob);
            $stmt->bindParam(":hireprice", $hireprice);
            $stmt->bindParam(":kindofwork", $kindofwork);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":code", $code);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":details", $details);
            $stmt->execute();
            $_SESSION['success'] = "คุณได้โพสต์งานสำเร็จ";
            header("location: unijob_post.php");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
?>