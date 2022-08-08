<?php include('allpagepost.php'); ?>

    <!-- Start Post -->
    <form action="post_db.php" method="post">

        <!-- แจ้งว่าสำเร็จ/ไม่สำเร็จในการกรอกข้อมูลการจ้างงาน -->
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- แจ้งว่าสำเร็จ/ไม่สำเร็จในการกรอกข้อมูลการจ้างงาน -->

        <br><br>

        <!-- ประเภทงาน -->
        <label for="typejob" class="form-label">ประเภทงาน</label>
        <select class="form-select" id="typejob" name="typejob" required>
            <option></option>
            <option value="งานคอมพิวเตอร์">คอมพิวเตอร์</option>
            <option value="งานฝากซื้อ">ฝากซื้อ</option>
            <option value="งานเอกสาร">งานเอกสาร</option>
        </select>
        <!-- ประเภทงาน -->

        <br><br>

        <!-- ราคาจ้าง -->
        <label for="hireprice" class="form-label">ราคาจ้าง</label>
        <input class="inputRange" type="range" min="50" max="1000" name="hireprice">
        <input class="inputNumber" id="hireprice" min="50" max="1000" value="0" type="number" name="hireprice">
        <!-- ราคาจ้าง -->

        <br><br>

        <!-- รูปแบบงาน -->
        <input type="radio" id="now" name="kindofwork" value="งานตอนนี้" required>
        <label for="now">งานตอนนี้</label><br>
        <input type="radio" id="long" name="kindofwork" value="งานระยะยาว">
        <label for="long">งานระยะยาว</label><br>
        <input type="radio" id="forward" name="kindofwork" value="งานล่วงหน้าภายในวัน">
        <label for="forward">งานล่วงหน้าภายในวัน</label>
        <!-- รูปแบบงาน -->

        <br><br>

        <!-- ชื่อผู้จ้าง -->
        <label for="name">ชื่อผู้จ้าง</label><br>
        <input type="text" id="name" name="name" required><br>
        <!-- ชื่อผู้จ้าง -->

        <br><br>

        <!-- ใช้โค้ดโปรโมชั่น -->
        <label for="code">ใช้โค้ดโปรโมชั่น</label><br><br>
        <input type="tel" id="code" name="code" placeholder="8 ตัวเลข" pattern="[0-9]{8}"><br><br>
        <!-- ใช้โค้ดโปรโมชั่น -->

        <!-- เบอร์โทร -->
        <label for="phone">Enter a phone number:</label><br><br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
        <!-- เบอร์โทร -->

        <br><br>

        <!-- รายละเอียดงาน -->
        <label for="details">รายละเอียดงาน</label><br>
        <textarea name="details" rows="10" cols="30" required></textarea>
        <!-- รายละเอียดงาน -->

        <br><br>

        <!-- location -->

        <h3>My Google Maps Demo</h3>
        <!--The div element for the map -->
        <div id="map"></div>

        <!-- 
        The `defer` attribute causes the callback to execute after the full HTML
        document has been parsed. For non-blocking uses, avoiding race conditions,
        and consistent behavior across browsers, consider loading using Promises
        with https://www.npmjs.com/package/@googlemaps/js-api-loader.
        -->
        <script async 
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
        </script>

        <!-- location -->

        <br><br>

        <!-- ปุ่ม submit -->

        <div class="input-group">
            <button type="submit" name="post" class="post-btn">หน้าถัดไป</button>
        </div>

        <!-- ปุ่ม submit -->

    </form>

    <!-- End Post -->

</body>
</html>

<script src="js/post.js"></script>
<script src="js/bootstrap.min.js"></script>