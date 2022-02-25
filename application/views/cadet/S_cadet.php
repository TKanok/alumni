<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/22c000d6ac.js" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>


    <title>Search Alumni</title>
</head>

<body>
    <div class="bg">
        <img src="<?= base_url('image/bg-vertical.png') ?>" alt="" srcset="">
    </div>

    <nav>
        <div class="logo"><img src="<?= base_url('image/logo.png') ?>" width="70" height="70">ทำเนียบศิษย์เก่า ร.ร.นตท.
        </div>
        <!-- <button class="nav-toggle" id="navToggle"><i class="fas fa-bars"></i></button> -->
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a href="">ลงทะเบียนศิษย์เก่า</a></li>
            <li><a class="active" href="">ทำเนียบศิษย์เก่า</a></li>
            <li><a href="">ลงทะเบียนอดีตอาจารย์</a></li>
            <li><a href="">ทำเนียบอดีตอาจารย์</a></li>
            <li><a href="">บัญชี</a></li>
            <li><a href="" class="btn-log">Log in</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="search-path">
            <div class="title">ค้นหาข้อมูลศิษย์เก่า</div>
            <form action="">
                <div class="form-row">
                    <div class="col-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รหัสนักเรียน</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ชื่อ</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">นามสกุล</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รุ่น</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="input-group mb-3 col-auto">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">เหล่า</label>
                        </div>
                        <select class="custom-select custom-control" id="inputGroupSelect01">
                            <option selected>กรุณาเลือก...</option>
                            <option value="1">ทบ.</option>
                            <option value="2">ทร.</option>
                            <option value="3">ทอ.</option>
                            <option value="3">ตร.</option>
                        </select>
                    </div>
                </div>
                <p>** ท่านสามารถสืบค้นได้จาก รหัสนักเรียน ชื่อ นามสกุล รุ่น เหล่า
                    โดยท่านสามารถระบุข้อความบางส่วนของ ชื่อหรือนามสกุล ที่ท่านต้องการ</p>
                <div class="button">
                    <a href="#" class="btn-submit"><i class="fas fa-search"></i></i>ค้นหา</a>
                    <a href="#" class="btn-reset"><i class="fas fa-power-off"></i>ยกเลิก</a>
                </div>
            </form>
        </div>


        <div class="table-responsive-md">
            <h3>รายชื่อศิษย์เก่า จำนวน .... รายการ</h3>
            <table id="example" class="table" style="width: 100%">
                <thead>
                    <tr class="table-primary">
                        <th width="10%">ลำดับ</th>
                        <th width="15%">รหัสนักเรียน</th>
                        <th width="40%">ชื่อ-นามสกุล</th>
                        <th width="10%">รุ่น</th>
                        <th width="10%">เหล่า</th>
                        <th width="15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>000000</td>
                        <td>Name Surname</td>
                        <td>1</td>
                        <td>ทบ.</td>
                        <td><a href="#" id="open"><i class="fas fa-hand-point-right"></i>&nbsp;ข้อมูลส่วนตัว</a></td>
                    </tr>
                    <!-- Popup -->
                    <div class="popup-container" id="popup_container">
                        <div class="popup">
                            <div class="p-title">
                                <h4>Name Surname</h4>
                            </div>
                            <div class="p-body">
                                <div class="form-row">
                                    <div class="col-auto popup">
                                        <img src="<?= base_url('image/avatar.png') ?>" width="100">
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">รหัสนักเรียน</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">รุ่น</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">เหล่า</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">เบอร์โทร</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Facebook</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Line ID</div>
                                            </div>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-footer">
                                <a href="#" id="close"><i class="fas fa-undo-alt"></i>&nbsp;ย้อนกลับ</a>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>


    </div>

</body>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});

// Popup

const open = document.getElementById('open')
const popup_container = document.getElementById('popup_container')
const close = document.getElementById('close')

open.addEventListener('click', () => {
    popup_container.classList.add('show');
});

close.addEventListener('click', () => {
    popup_container.classList.remove('show');
});
</script>

</html>