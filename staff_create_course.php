<?php include 'header.php' ?>

<div class="container" style="width: 500px;">

    <center><h3 class="mt-3">สร้างรายวิชาที่จะสอน</h3></center>

    <form action="#">
    <div class="form-group">
        <label for="email">ชื่อวิชา:</label>
        <input type="text" class="form-control" id="CourseName">
    </div>
    <div class="form-group">
        <label for="pwd">รายละเอียดวิชา:</label>
        <input type="text" class="form-control" id="CourseDescription">
    </div>
    <div class="form-group">
        <label for="pwd">ค่าเล่าเรียน:</label>
        <input type="text" class="form-control" id="TuitionFree">
    </div>
    <div class="form-group">
        <label for="pwd">จำนวนเวลาที่สอนทั้งหมด:</label>
        <input type="text" class="form-control" id="TotalHours">
    </div>
    <div class="form-group">
        <label for="pwd">หมวดหมู่:</label>
        <select class="custom-select" id="CourseGroupID">
            <option selected disabled selected value>เลือก</option>
            <option value="1">หมวดภาษา</option>
            <option value="2">หมวดคณิตศาสตร์</option>
            <option value="3">หมวดวิทยาศาสตร์</option>
            <option value="4">หมวดสังคมศาสตร์</option>
            <option value="5">หมวดคอมพิวเตอร์</option>
            <option value="6">หมวดจิตวิทยา</option>
            <option value="6">หมวดกีฬา</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


<script>
    // datepicker
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<?php include 'footer.php' ?>

<!-- <div class="row">
        <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="container">
                  <div class="positionprofile">
                  <center>
                  <label style="font-size:30px;">Profile</label>
                  </center
                  </div>
                <div>
                <form>
                      <div class="form-group">
                        <label for="" class="insertform" style="text-align:left;margin-left:20%;">ข้อมูลทั่วไป:</label>
                        <center>
                          <input type="name" class="form-control" id="fname" style="width:60%" placeholder="กรุณากรอกชื่อ">
                          <br>
                          <input type="name" class="form-control" id="lname" style="width:60%" placeholder="กรุณากรอกนามสกุล">
                          <br>
                          <input type="name" class="form-control" id="ctzid" style="width:60%" placeholder="กรุณากรอกรหัสบัตรประจำตัวประชาชน">
                          <br>
                          <input class="form-control" id="datepicker" placeholder="กรุณากรอกวันเกิด" width="60%" />
                        </center>
                        <br>
                        <div class="container text-center">
                            <div class="form-check">
                                <label for="">เพศ: </label><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                ชาย
                                </label>
                                <input class="form-check-input" style="margin-left:2px;" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1" style="margin-left:20px;">
                                หญิง
                                </label>
                            </div>
                        </div>                    
                      </div>
                      <div class="form-group">
                        <label for="addresst" style="text-align:left;margin-left:20%;margin-top:10px;">ที่อยู่:</label>
                        <center>
                        <textarea class="form-control" rows="5" id="address" style="width:60%"></textarea>
                        <br>
                        <button type="button" id="save" class="btn btn-danger">บันทึก</button>
                        </center>
                      </div>
                </form>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
            </div>
      </div>
</div> -->