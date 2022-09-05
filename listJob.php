<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Style -->
    <link rel="stylesheet" href="assets/style.css">


    <title>Unijob</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container container-fluid">
    <a class="navbar-brand" href="index.php">Unijob</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="postJob.php">โพสต์งาน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="listJob.php">รับงาน</a>
        </li>
      </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item ps-2">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
        </li>
        <li class="nav-item ps-2">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
        </button>
        </li>
        </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
    
    <div class="col-sm-12 col-md-6 pt-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">งานเอกสาร พิมงานตามสาขา</h5>
            <p class="card-text">พิมเอกสารตามที่บอก แล้วส่งตามเวลา ทางเราจะจัดเอกสารส่งให้</p>
            <a href="#" class="btn btn-primary">รับงาน</a>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 pt-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">ลงวินโดว์ให้กับทางห้องคอม</h5>
            <p class="card-text">ลงวินโดว์ให้กับห้องคอมสาขา Big data แล้วลงโปรแกรมตามกำหนด</p>
            <a href="#" class="btn btn-primary">รับงาน</a>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 pt-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">ทำความสะอาดห้อง Big data</h5>
            <p class="card-text">ทำความสะอาดห้อง Big data ให้เรียบร้อย เช็คโต๊ะ ล้างแอร์ แล้วจัดโต๊ะคอมให้เรียบร้อย</p>
            <a href="#" class="btn btn-primary">รับงาน</a>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>