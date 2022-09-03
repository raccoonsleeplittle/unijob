<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_post_customer</title>
</head>
<body style="background-color: gray;">


                            <li class="nav-item"><button type="button" class="btn btn-info btn-round" style="font-family: 'Kanit', sans-serif;" data-toggle="modal" data-target="#registerModal">สมัครสมาชิก</button></li>




                            <script>
            $(document).ready(function() 
            {             
                $(function () 
                {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            });
        </script>

        <?php 
            session_start();
            require_once 'config/db.php';
        ?>







<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4 style="font-family: 'Kanit', sans-serif;">สมัครสมาชิก</h4>
                        <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                        </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="d-flex flex-column text-center">
                    <div class="signup d-flex flex-column text-center">
                        <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">เลขบัตรประจำตัวประชาชน</a>
                                <input type="idcard" name="idcard" class="form-control" id="idcard"placeholder="เลขบัตรประจำตัวประชาชน">
                            </div><p> </p>
                            <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">ชื่อ-สกุล</a>
                                <input type="name" name="name" class="form-control" id="name"placeholder="ชื่อสกุล">
                            </div><p> </p>
                            <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">อีเมล์</a>
                                <input type="email" name="email" class="form-control" id="email"placeholder="อีเมล์">
                            </div><p> </p>
                            <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">รหัสผ่าน</a>
                                <input type="password" name="password" class="form-control" id="password"placeholder="รหัสผ่าน">
                            </div><p> </p>
                            <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">ยืนยันรหัสผ่าน</a>
                                <input type="password" name="c_password" class="form-control" id="c_password"placeholder="ยืนยันรหัสผ่าน">
                            </div><p> </p>
                            <form action="signup_db.php" method="post" name="registerModal">
                            <div class="form-group" style="text-align:left;">
                                <a style="font-family: 'Kanit', sans-serif;">เบอร์โทร</a>
                                <input type="tel" name="phone_number" class="form-control" id="phone_number"placeholder="เบอร์โทร">
                            </div><p> </p>
                            <button type="submit" name="signup" class="signup btn btn-info btn-block btn-round">สมัครสมาชิก</button>
                    </div>
                        </form>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">หากคุณเป็นสมาชิกอยู่แล้ว ?<a href="#a" class="text-info">เข้าสู่ระบบ</a>.</div>
                </div>
            </div>
                </div>
            </div>
        </div>

</body>
</html>