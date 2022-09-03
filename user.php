<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UNIJOB</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">


</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM tab_user WHERE id_card = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>


        <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <!-- <a class="navbar-brand" href="#page-top"></a> -->
            <a href="#page-top"><img src="./img/Logo.png" alt="..." width="100px" /></a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services" style="font-family: 'Kanit', sans-serif;">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php" style="font-family: 'Kanit', sans-serif;">เกี่ยวกับ</a></li>
                    <li class="nav-item"><a class="nav-link" href="./news.php" style="font-family: 'Kanit', sans-serif;">ข่าวสาร</a></li>
                    <li class="nav-item"><a class="nav-link" href="./review.php" style="font-family: 'Kanit', sans-serif;">รีวิว</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php" style="font-family: 'Kanit', sans-serif;">สมัครสมาชิก</a></li>
                    <li class="nav-item"><a class="nav-link" href="./unijob_post.php" style="font-family: 'Kanit', sans-serif;">เริ่มงต้นการใช้งาน</a></li>

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $row['name'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--  
                    <div class="dropdown btn-user">
                        <div><button type="button" class="btn btn-user" style="font-family: 'Kanit', sans-serif;"><?php echo $row['name'] ?></button></div>
                        <div class="dropdown-content">
                            <a href="unijob_post.php">โพสต์งาน</a>
                            <a href="#">Link 2</a>
                            <a href="logout.php" style="font-family: 'Kanit', sans-serif;" class="logout">ออกจากระบบ</a>
                        </div>
                    </div>
                    <li class="nav-item"></li>
                -->
                </ul>
            </div>
        </div>
    </nav>
  


    <!-- Masthead-->
    <header class="masthead" style="background-image: url('../../unijob/img/platform_.png');background-position: right center;">
            <div class="container">
                <div class="masthead-heading text-uppercase">แพลตฟอร์มสำหรับหางานให้นักศึกษา</div>
                <div  class="masthead-subheading">มีงานให้เลือกหลากหลายประเภทตามความสามารถ ความต้องการ และมีความปลอดภัย<br>ทำงานแบบระยะชั่วคราว แบบ Freelance โดยไม่ต้องห่วงเรื่องปัญหาเวลาในการศึกษาอีกต่อไป</div>
                <div style="padding-left:80px;">
                    <a class="btn  btn-xl text-uppercase" href="#services" style="background-color: gray; color: black; font-family: 'Kanit', sans-serif;border-radius:120px">สำหรับนักศึกษา</a><a style="padding-right: 80px;"></a>
                    <a class="btn  btn-xl text-uppercase" href="#services" style="background-color: #513ABF; color: white; font-family: 'Kanit', sans-serif;border-radius:120px">สำหรับผู้ใช้งาน/นายจ้าง</a>
                </div>
            </div>
        </header>
        <header class="masthead" style="background-image: url('./img/homeimg2.jpg');background-position: right bottom;">
            <div class="container">
                <div style="padding-left:80px;">
                    <a class="btn  btn-xl text-uppercase" href="#services" style="background-color: gray; color: black; font-family: 'Kanit', sans-serif;border-radius:120px;">ศึกษาวิธีการใช้งาน</a><a style="padding-right: 80px;"></a>
                    <a class="btn  btn-xl text-uppercase" href="#services" style="background-color: #513ABF; color: white; font-family: 'Kanit', sans-serif;border-radius:120px">ศึกษาข้อกำหนดการใช้งาน</a>
                </div>
            </div>
        </header>
        
        <section class="page-section" id="information"> <!-- เปลี่ยนรูปได้จาก ID -->
            <div class="container">
                <div class="text-center">
                    <h2 style="font-family: 'Kanit', sans-serif;color:white;">ข่าวประชาสัมพันธ์จากแพลตฟอร์ม</h2>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div id="Information" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#Information" data-slide-to="0" class="active"></li>
                                <li data-target="#Information" data-slide-to="1"></li>
                                <li data-target="#Information" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                   <a href="./news.php"><img class="d-block w-100" src="./img/new1.jpg" alt="First slide" ></a> 
                                </div>
                                <div class="carousel-item">
                                   <a href="#"><img class="d-block w-100" src="./img/new2.jpg" alt="Second slide"></a>
                                </div>
                                <div class="carousel-item">
                                   <a href="#"><img class="d-block w-100" src="./img/new3.jpg" alt="Third slide"></a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#Information" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#Information" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section" id="promotion">
            <div class="container">
                <div class="text-center">
                    <h1 style="font-family: 'Kanit', sans-serif;color:white;">โปรโมชั่นรายวัน</h1> 
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div id="promotion" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#promotion" data-slide-to="0" class="active"></li>
                                <li data-target="#promotion" data-slide-to="1"></li>
                                <li data-target="#promotion" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./img/new1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./img/new2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./img/new3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#promotion" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#promotion" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header class="masthead" style="background-image: url('./img/HomeImg3-1.jpg');background-position: right center;">
            <div class="container">
                <div class="masthead-heading text-uppercase">
                    นึกถึงคนแก้ปัญหาสำหรับคุณ<br>นึกถึง UNI<a style="color:#513ABF;">JOB</a> สิครับ</div>
                    <a class="btn  btn-xl text-uppercase" href="#services" style="background-color: #513ABF; color: black; font-family: 'Kanit', sans-serif;border-radius:120px">ไปหน้าเกียวกับเรา</a>
            </div>
        </header>
        <header class="masthead" style="background-image: url('./img/homeImg4-1.jpg');background-position: right center;">
            <div class="container">
                <div class="masthead-heading text-uppercase">
                    แพลตฟอร์มนี้ปลอดภัย ดำเนินการทำงานด้วย<br>นักศึกษาปฏิบัติงาน มั่นใจ ปลอดภัย หายห่วง
                </div>
            </div>
        </header>
        <header class="masthead" style="background-image: url('./img/homeImg4-2.jpg');background-position: left center;">
            <div class="container">
                <div class="masthead-heading text-uppercase" style="text-align:right;padding-left:300px">
                    <div style="text-align:center;">"แพลตฟอร์มที่สร้างขึ้นมาเพื่อช่วยให้นักศึกษา"</div>
                    <div style="text-align:center;">สำเร็จการศึกษาโดยปราศจากปัญหา</div>
                    <div style="text-align:center;">ทางด้านการเงิน</div>
                </div>
            </div>
        </header>



        <!--footer-->
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <footer class="bg-dark text-center text-lg-start text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h1 class="text-uppercase" style="color:#4785ff">UNIJOB</h1>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a>บริษัท  เซนติกา โกลบอล เทค จำกัด 
                                    39 หมู่ที่ 1 ถนน รังสิต - นครนายก 
                                    ตำบล คลองหก อำเภอคลองหลวง 
                                    ปทุมธานี 12110
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align:center;">
                        <h4 class="text-uppercase" style="font-family:'Kanit',sans-serif;">เมนู</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a>หน้าแรก</a>
                            </li>
                            <li>
                               <a href="#" style="color:white;font-family:'Kanit',sans-serif;">เกี่ยวกับ</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">ข่าวสาร</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">รีวิว</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">ดาวน์โหลด</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align:center;">
                        <h5 class="text-uppercase" style="font-family:'Kanit',sans-serif;" >ศูนย์ช่วยเหลือ</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">ติดต่อรา</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">วิธีใช้งาน</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">คำถามที่พบบ่อย</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">เงื่อนไขและข้อกำหนด</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">นโยบายความเป็นส่วนตัว</a>
                            </li>
                            <li>
                                <a href="#" style="color:white;font-family:'Kanit',sans-serif;">นโยบายการใช้ข้อมูลคุกกี้</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align:center;">
                        <h5 class="text-uppercase" style="font-family:'Kanit',sans-serif;">ติดต่อเรา</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a>ติดต่อสอบถามข้อมูลเพิ่มเติม</a>
                            </li>
                            <li>
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a>Info@unijob.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
            <!-- Copyright -->
            <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2)">
                Copyright © www.unijob.com <br>เพราะเราอยากให้นักศึกษามีรายได้และสามารถสำเร็จการศึกษาได้โดยไม่มีอุปสรรคทางด้านการเงิน คึดถึงงานคิดถึง Unijob
                <a class="text-secondary" href="https://www.unijob.com/">Unijob.com</a>
            </div>
        <!-- Copyright -->
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->


</body>
</html>