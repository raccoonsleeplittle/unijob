<?php 
    include('config/server.php');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/post-style.css" >
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="unijob_post.php" class="list-group-item list-group-item-action">
                        สั่งงาน
                    </a>
                    <a href="post_status.php" class="list-group-item list-group-item-action active">สถานะงาน</a>
                    <a href="#" class="list-group-item list-group-item-action">ประวัติการสั่งงาน</a>
                    <a href="#" class="list-group-item list-group-item-action">ยอดเงินในเครดิต</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">ติดต่อเจ้าหน้าที่</a>
                </div>
            </div>
            <div class="col-9 tl">
                
                    <?php

                        $sql = "SELECT * FROM post_db";
   
                        try{
                            $pdo = new PDO($dsn, $username, $password);
                            $stmt = $pdo->query($sql);
                            
                            if($stmt === false){
                             die("Error");
                            }
                            
                           }catch (PDOException $e){
                             echo $e->getMessage();
                           }

                    ?>
                
            </div>
        </div>
    </div>


        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


        <script src="js/sc-post.js"></script>

</body>

</html>