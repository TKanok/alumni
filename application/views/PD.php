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
    <header>
        <div class="container-fluid">
            <nav>
                <div>
                    <label><img src="<?= base_url('image/logo.png') ?>" width="80" height="80">ทำเนียบศิษย์เก่า
                        รร.นตท.</label>
                    <button class="nav-toggle" id="navToggle"><i class="fas fa-bars"></i></button>
                </div>
                <ul>
                    <li><a href="">ลงทะเบียนศิษย์เก่า</a></li>
                    <li><a href="">ทำเนียบศิษย์เก่า</a></li>
                    <li><a href="">ลงทะเบียนอดีตอาจารย์</a></li>
                    <li><a href="">ทำเนียบอดีตอาจารย์</a></li>
                    <li><a href="">ข้อมูลส่วนตัว</a></li>
                    <li class="button"><a href="">Log in</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="profile">
        <div class="Profile-img">
            <img src="<?= base_url('image/avatar.png')?>" alt="">
        </div>
        <div class="details">
            <h3>ข้อมูลส่วนตัว</h3>
            <div class="form">
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รหัสนักเรียน</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">ชื่อ นามสกุล</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">รุ่น</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">เหล่า</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">เบอร์โทร</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Facebook</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Line ID</div>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
const navToggle = document.querySelector('#navToggle');
const nav = document.querySelector('nav');


navToggle.addEventListener("click", () => {
    nav.classList.toggle('open')
    // alert('Hello')
})
</script>


</html>