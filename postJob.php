<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  href="node_modules/@chenfengyuan/datepicker/dist/datepicker.css" rel="stylesheet">

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
          <a class="nav-link active" href="postJob.php">โพสต์งาน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listJob.php">รับงาน</a>
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
<div class="row mt-5">
  <div class="col-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">สั่งงาน</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">สถานะงาน</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">ประวัติการสั่งงาน</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">ยอดเงินในเครดิต</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <form>
        <div class="row">
        <div class="col-6 mb-3">
          <label for="nameWork" class="form-label">ชื่องาน</label>
          <input type="text" class="form-control" id="nameWork" aria-describedby="emailHelp">
        </div>
        <div class="col-6 mb-3">
          <label for="nameWork" class="form-label">ราคา</label>
          <input type="text" class="form-control" id="nameWork" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="row">
        <div class="col-6 mb-3">
          <label for="exampleInputPassword1" class="form-label">ชื่อผู้จ้าง</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-6 mb-3">
          <label for="exampleInputPassword1" class="form-label">เบอร์โทรติดต่อ</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        </div>

        <div class="row">
          <div class="col-6">
          <label for="exampleInputPassword1" class="form-label">วันเริ่มงาน</label>
            <input type="text" placeholder="วันเริ่มงาน" aria-label="First name" class="form-control start-date">
          </div>
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label">วันจบงาน</label>
            <input type="text" placeholder="วันจบงาน" aria-label="Last name" class="form-control end-date">
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดงานเพิ่มเติม</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label">สถานที่ทำงาน</label> 
        <div class="mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30963.74074493184!2d100.70719176848243!3d14.049543364016815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d78a4a8713c3f%3A0xf019238243532a0!2sRajamangala%20University%20of%20Technology%20Thanyaburi!5e0!3m2!1sen!2sth!4v1662273386510!5m2!1sen!2sth" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button type="submit" class="btn btn-primary">ยืนยันข้อมูล</button>

      </form>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
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
    <input type="email" class="form-control" id="nameWork" aria-describedby="emailHelp">
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

 <script src="node_modules/jquery/dist/jquery.js"></script><!-- jQuery is required -->
    
    <script src="node_modules/@chenfengyuan/datepicker/dist/datepicker.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
    
    $(function() {
      var $startDate = $('.start-date');
      var $endDate = $('.end-date');

      $startDate.datepicker({
        autoHide: true,
      });
      $endDate.datepicker({
        autoHide: true,
        startDate: $startDate.datepicker('getDate'),
      });

      $startDate.on('change', function () {
        $endDate.datepicker('setStartDate', $startDate.datepicker('getDate'));
      });
    });
  
</script>
  </body>
</html>