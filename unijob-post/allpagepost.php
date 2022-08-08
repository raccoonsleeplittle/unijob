<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จ้างงาน</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- for google map -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="./index.js"></script>
    <!-- for google map -->
    
</head>
<body>
    
    <!-- start Header -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- start sidebar -->
        <nav class="menu-sidebar">
            <div class="box">
                <li><a href="#" class="sidebar">สั่งงาน</a></li>
                <li><a href="#" class="sidebar">สถานะงาน</a></li>
                <li><a href="#" class="sidebar">ประวัติการสั่งงาน</a></li>
                <li><a href="#" class="sidebar">ยอดเงินในเครดิต</a></li>
                <li><a href="#" class="sidebar">ติดต่อเจ้าหน้าที่</a></li>
            </div>
        </nav>
    <!-- End Sidebar -->