<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/sc-1.4.4/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/sc-1.4.4/datatables.min.js"></script>

<div class="container mt-4">
    <h2>รับแจ้งชำระ</h2>
    <!-- Data Table -->
    <table class="table" id="myTable">
    <thead class="thead-dark">
        <tr>
        <th scope="col">เลขที่ใบเสร็จ</th>
        <th scope="col">รหัสวิชาที่ชำระ</th>
        <th scope="col">จำนวนเงิน</th>
        <th scope="col">เวลาที่ชำระ</th>
        <th scope="col">ผู้รับ</th>
        <th scope="col">สถานะแจ้งชำระ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">SCH001</th>
        <td>C035</td>
        <td>3400 บาท</td>
        <td>9/6/2561 20:22</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-success">จ่ายแล้ว</button></td>
        </tr>
        <tr>
        <th scope="row">SCH002</th>
        <td>C022</td>
        <td>9100 บาท</td>
        <td>10/7/2561 21:22</td>
        <td>@fat</td>
        <td><button type="button" class="btn btn-danger">ยังไม่จ่าย</button></td>
        </tr>
        <tr>
        <th scope="row">SCH003</th>
        <td>C040</td>
        <td>1800 บาท</td>
        <td>11/8/2561 22:22</td>
        <td>@twitter</td>
        <td><button type="button" class="btn btn-success">จ่ายแล้ว</button></td>
        </tr>
    </tbody>
    </table>
</div>

<?php include 'footer.php' ?>