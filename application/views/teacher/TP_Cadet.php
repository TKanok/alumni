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

    <title>Profile Alumni</title>
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
            <li><a href="">ทำเนียบศิษย์เก่า</a></li>
            <li><a href="">ลงทะเบียนอดีตอาจารย์</a></li>
            <li><a href="">ทำเนียบอดีตอาจารย์</a></li>
            <li><a href="" class="active">บัญชี</a></li>
            <li><a href="" class="btn-log">Log in</a></li>
        </ul>
    </nav>

    <div class="container-profile">
        <h3>ข้อมูลส่วนตัว</h3>
        <hr>
        <form action="">
            <div class="right-profile">
                <div class="profile-img">
                    <img src="<?= base_url('image/avatar.png')?>" alt="">
                </div>
                <!-- <div class="change_password">
                    <div class="password-title">
                        <h4><i class="fas fa-lock"></i>แก้ไขรหัสผ่าน</h4>
                    </div>
                    <div class="input-password">
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="รหัสผ่านปัจจุบัน">
                        </div>
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="รหัสผ่าน">
                        </div>
                        <div class="input-box">
                            <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน">
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="left-profile">
                <div class="form-detail">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="details">ชื่อ-นามสกุล</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="details">รุ่นที่สอน</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <span class="details">วิชาที่สอน</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="details">เบอร์โทร 1</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="col-md-4">
                            <span class="details">เบอร์โทร 2</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="col-md-4">
                            <span class="details">เบอร์โทร 3</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="details">ที่อยู่ 1</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="details">ที่อยู่ 2</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="details">ที่อยู่ 3</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="details">Facebook</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <span class="details">Line ID</span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-submit"><i class="fas fa-chevron-circle-right"></i>แก้ไขข้อมูล</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>


</html>