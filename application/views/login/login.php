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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <title>Alumni</title>
</head>

<body>
    <div class="login-form">
        <div class="img-top">
            <img src="<?= base_url("image/logo1.png"); ?>" alt="logo" width="160" height="160">
        </div>
        <div class="content">
            <h4>ทำเนียบศิษย์เก่า โรงเรียนเตรียมทหาร</h4>
        </div>
        <div class="split">
            <form>
                <div class="form-group">
                    <label>Username</label>
                    <div class="col-md-12">
                        <input type="text" class="input-box">
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div>
                        <input type="password" class="input-box">
                    </div>
                </div>
                <div class="form-group">
                    <a href="#" class="btn">เข้าสู่ระบบ</a>
                </div>
            </form>

            <div class="sub-link">
                <ul>
                    <li><a href="<?= base_url('index.php/welcome/R_cadet'); ?>"><i class="bi bi-arrow-right-circle"></i>ลงทะเบียนศิษย์เก่า</a></li>
                    <li><a href="<?= base_url('index.php/welcome/S_search'); ?>"><i class="bi bi-arrow-right-circle"></i>ทำเนียบศิษย์เก่า</a></li>
                    <li><a href="<?= base_url('index.php/welcome/T_cadet'); ?>"><i class="bi bi-arrow-right-circle"></i>ลงทะเบียนอดีตอาจารย์</a></li>
                    <li><a href="<?= base_url('index.php/welcome/T_search'); ?>"><i class="bi bi-arrow-right-circle"></i>ทำเนียบอดีตอาจารย์</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>