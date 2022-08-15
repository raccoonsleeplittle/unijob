<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link  rel="stylesheet" href="css/post_style.css">
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
          <a href="unijob_post.php" class="list-group-item list-group-item-action active">
            สั่งงาน
          </a>
          <a href="post_status.php" class="list-group-item list-group-item-action">สถานะงาน</a>
          <a href="#" class="list-group-item list-group-item-action">ประวัติการสั่งงาน</a>
          <a href="#" class="list-group-item list-group-item-action">ยอดเงินในเครดิต</a>
          <a href="#" class="list-group-item list-group-item-action disabled">ติดต่อเจ้าหน้าที่</a>
        </div>
      </div>
      <div class="col-9">
        <form action="unijob_post_db.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">กรอกรายละเอียดงาน</label>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            <br>
            <div class="row">
              <div class="col-6">
                <label for="exampleInputPassword1">ประเภทงาน</label>
                <select class="form-control" name="typejob">
                  <option>งานทั่วไป</option>
                  <option>งานไอที</option>
                  <option>งานพิมเอกสาร</option>
                  <option>อื่น</option>
                </select>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1">ราคาจ้าง</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="จำนวนค่าจ้าง" name="hireprice" required
                oninvalid="this.setCustomValidity('กรุณาใส่ค่าจ้าง')"
                oninput="this.setCustomValidity('')"/>
              </div>
            </div>
            <br>
            <label for="exampleInputPassword1">รูปแบบงาน</label>
            <fieldset class="form-group">
              <div class="row">
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="kindofwork" id="gridRadios1" value="งานตอนนี้" checked>
                    <label class="form-check-label" for="gridRadios1">
                      งานตอนนี้
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="kindofwork" id="gridRadios2" value="งานระยะยาว">
                    <label class="form-check-label" for="gridRadios2">
                      งานระยะยาว
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="kindofwork" id="gridRadios2" value="งานล่วงหน้าภายในวัน">
                    <label class="form-check-label" for="gridRadios2">
                      งานล่วงหน้าภายในวัน
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="row">
              <div class="col-6">
                <label for="exampleInputPassword1">อีเมลของผู้จ้าง</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรุณากรอกอีเมลของผู้จ้าง" name="email" required>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1">ใช้โค๊ดโปรโมชั้น</label>
                <input type="number" class="form-control" name="code" placeholder="โค้ด 8 ตัวเลข" pattern="[0-9]{8}" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="exampleInputPassword1">เบอร์ติดต่อ</label>
              <input type="tel" class="form-control" name="phone" id="tel" placeholder="กรุณากรอกเบอร์ติดต่อ" pattern="[0-9]{10}" required>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-6">
              <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
              <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-6">
              <label for="exampleFormControlTextarea1">สถานที่ทำงาน</label>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.67256830534!2d100.72485546483372!3d14.037412940163145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d78a4a8713c3f%3A0xf019238243532a0!2sRajamangala%20University%20of%20Technology%20Thanyaburi!5e0!3m2!1sen!2sth!4v1660283801746!5m2!1sen!2sth" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="submit-post">Submit</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <script src="js/sc-post.js"></script>

</body>

</html>