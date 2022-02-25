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



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/22c000d6ac.js" crossorigin="anonymous"></script>

    <title>Register Alumni</title>
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
            <li><a href="" class="active">ลงทะเบียนศิษย์เก่า</a></li>
            <li><a href="">ทำเนียบศิษย์เก่า</a></li>
            <li><a href="">ลงทะเบียนอดีตอาจารย์</a></li>
            <li><a href="">ทำเนียบอดีตอาจารย์</a></li>
            <li><a href="">บัญชี</a></li>
            <li><a href="" class="btn-log">Log in</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="title">ลงทะเบียนศิษย์อดีตอาจารย์</div>
        <hr>
        <div class="form-detail">
            <div class="row">
                <div class="col-md-12">
                    <span class="details">ชื่อ-นามสกุล</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="details">รุ่นที่สอน</span>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <span class="details">วิชาที่สอน</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="details">เบอร์โทร 1</span>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <span class="details">เบอร์โทร 2</span>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <span class="details">เบอร์โทร 3</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="details">ที่อยู่ 1</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="details">ที่อยู่ 2</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class="details">ที่อยู่ 3</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="details">Facebook</span>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <span class="details">Line ID</span>
                    <input type="text" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row upload-file">
                <div class="custom-file">
                    <span class="details mb-2">อัพโหลดรูปภาพ</span>
                    <br>
                    <input type="file" class="custom-file-input mt-2" id="customFile">
                </div>
            </div>
            <hr>
            <div class="row verify">
                <div class="col-md-6">
                    <span class="details">กำหนดชื่อผู้ใช้*</span>
                    <input type="text" class="form-control" Required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="details">กำหนดรหัสผ่าน*</span>
                    <input type="text" class="form-control" Required>
                </div>
                <div class="col-md-6">
                    <span class="details">ยืนยันรหัสผ่าน*</span>
                    <input type="text" class="form-control" Required>
                </div>
            </div>
            <div class=" row button">
                <a href="#" class="btn-primary">ลงทะเบียน</a>
                <a href="#" class="btn-danger">ยกเลิก</a>
            </div>
        </div>
        <br><br><br>
    </div>

</body>

</html>