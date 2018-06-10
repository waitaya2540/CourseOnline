<?php include 'header.php' ?>


<div class="container" style="width: 500px;">

    <center><h3 class="mt-3">สร้างรายวิชา</h3></center>

    <form action="#">
    <div class="form-group">
        <label for="email">ชื่อวิชา:</label>
        <input type="text" class="form-control" id="CourseName">
    </div>
    <div class="form-group">
        <label for="pwd">รายละเอียดวิชา:</label>
        <textarea name="CourseDescription" id="CourseDescription" class="form-control" cols="30" rows="10"></textarea>
    </div> 
    <div class="form-group">
        <label for="pwd">ค่าเล่าเรียน:</label>
        <input type="text" class="form-control" id="TuitionFree">
    </div>
    <div class="form-group">
        <label for="pwd">จำนวนเวลาที่สอนทั้งหมด(ชั่วโมง):</label>
        <input type="text" class="form-control" id="TotalHours">
    </div>
    <div class="form-group">
        <label for="pwd">เวลาเริ่มสอน:</label>
        <input type="text" class="form-control" id="datetimepicker8">
    </div>
    <div class="form-group">
        <label for="pwd">วันที่สอน:</label>
        <select class="custom-select" id="CourseGroupID">
            <option selected disabled selected value>---เลือกวัน---</option>
            <option value="SUN">อาทิตย์</option>
            <option value="MON">จันทร์</option>
            <option value="TUE">อังคาร</option>
            <option value="WED">พุธ</option>
            <option value="THU">พฤหัสบดี</option>
            <option value="FRI">ศุกร์</option>
            <option value="SAT">เสาร์</option>
        </select>
    </div>
    <div class="form-group">
        <label for="pwd">หมวดหมู่:</label>
        <select class="custom-select" id="CourseGroupID">
            <option selected disabled selected value>---เลือกหมวดหมู่---</option>
            <option value="1">หมวดภาษา</option>
            <option value="2">หมวดคณิตศาสตร์</option>
            <option value="3">หมวดวิทยาศาสตร์</option>
            <option value="4">หมวดสังคมศาสตร์</option>
            <option value="5">หมวดคอมพิวเตอร์</option>
            <option value="6">หมวดจิตวิทยา</option>
            <option value="6">หมวดกีฬา</option>
        </select>
    </div>
    <button type="submit" class="btn btn-danger btn-lg btn-block mb-5">Submit</button>
    </form>

</div>


<script type="text/javascript">
    $(function () {
        $('#datetimepicker8').datetimepicker();
    });
</script>

<?php include 'footer.php' ?>
