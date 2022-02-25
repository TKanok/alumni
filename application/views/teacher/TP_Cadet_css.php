<style>
@import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,500;0,600;1,400&display=swap');

:root {
    --first: #FE0000;
    --second: #0000FE;
    --third: #6DCFF6;
    --forth: #7A0025;
    --main: #f5f6fa;
    --primary: #2d3436;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Chakra Petch', sans-serif;
}

.bg img {
    position: absolute;
    width: 100vw;
    height: 30vh;
    top: 50%;
    z-index: -5;
    opacity: 1;
}

nav {
    height: 80px;
    background: #f5f6fa;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 50px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

nav .logo {
    font-size: 1.4rem;
}

nav ul {
    display: flex;
    list-style: none;

    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 5px;
}

nav ul li a {
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 0.7px;
    padding: 8px 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

nav ul li a:hover,
nav ul li a.active {
    color: #2d3436;
}

a.btn-log {
    color: #7A0025;
    border: 2px solid #7A0025;
    border-radius: 50px;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    text-transform: uppercase;
    font-weight: bold;
}

a.btn-log:hover {
    color: #f5f6fa;
    background-color: #7A0025;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px,
        rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}

nav .menu-btn i {
    color: #2d3436;
    font-size: 22px;
    cursor: pointer;
    display: none;
}

#click {
    display: none;
}

#click:checked~.menu-btn i::before {
    content: "\f00d";
}

/* Form */

.container-profile {
    background: #fff;
    margin: 0 auto;
    width: 1366px;
    height: 100%;
    position: relative;
    top: 50px;
    border-radius: 5px;
    padding: 30px 50px;
}

h3 {
    padding-top: 25px;
}

form {
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: space-between;
    align-items: stretch;
}

form .right-profile {
    flex: 1;
    padding: 10px 30px;
}

.right-profile .profile-img {
    display: flex;
    flex-direction: column;
    align-items: center;
    line-height: 2;
}

.right-profile .profile-img img {
    background: #f5f5f5;
    border-radius: 5px;
    margin: 10px 0;
    width: 100%;
}

.right-profile .change_password {
    margin-top: 10px;
    line-height: 1.5;
    padding: 15px 0;
}

.right-profile .change_password .password-title {
    background: #f5f5f5;
    padding: 10px;
    border-radius: 5px;
}

.right-profile .change_password .password-title h4 {
    margin-bottom: 0;
    font-size: 1.2rem;
}

.right-profile .change_password .password-title i {
    margin-right: 10px;
}

.right-profile .input-password .input-box {
    margin: 10px 0 0 0;
}

form .left-profile {
    flex: 2;
    padding: 10px 30px;
    margin-bottom: 0;
}

.left-profile h3 {
    font-weight: 600;
}

.left-profile .form-detail .row {
    margin-top: 15px;
    margin-bottom: 25px;
}

input.form-control {
    border: 0;
    border-radius: 0px;
    border-bottom: 1px solid #555;
    background: transparent;
    width: 100%;
    padding: 8px 0 5px 0;
    font-size: 16px;
}

input.form-control:focus {
    border: none;
    outline: none;
    border-bottom: 1px solid #e74c3c;
    box-shadow: none;
    padding: 12px 10px;
}

input.form-control[readonly] {
    background-color: transparent;
}

.button a {
    float: right;
    padding: 15px 20px;
    border-radius: 5px;
    background-color: #0d6efd;
    color: #fff;
    text-decoration: none;
    margin-top: 15px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.button a i {
    margin-right: 10px;
}

.button a:hover {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}


/* Mobile */
@media all and (max-width: 768px) {

    /* Navbar */
    nav {
        display: flex;
        padding: 0 20px;
    }

    nav .logo {
        font-size: 1rem;
    }

    /* Form */
    .container-profile {
        width: 100%;
    }

    form {
        flex-direction: column;
    }

    form .right-profile {
        padding: 30px 50px;
    }

    form .left-profile {
        padding: 10px 10px;
    }

    .col-md-6 {
        margin-top: 10px;
    }

    .button a {
        width: 100%;
        text-align: center;
    }
}

@media all and (max-width: 1024px) {
    nav .menu-btn i {
        display: block;
        margin-top: 5px;
    }

    nav ul {
        position: fixed;
        top: 80px;
        left: -100%;
        background: #f5f6fb;
        height: 100vh;
        width: 100%;
        display: block;
        text-align: center;
        transition: all 0.3s ease;
        z-index: 4;
    }

    nav ul li:hover {
        padding: 20px;
        background-color: #0d6efd;
    }

    li a.active:hover {
        color: #f5f6fa;
    }

    li a:hover {
        color: #f5f6fa;
    }

    nav .logo {
        font-size: 1.2rem;
        margin-top: 10px;
    }

    #click:checked~ul {
        left: 0%;
    }

    nav ul li {
        margin: 30px 0;
    }

    nav ul li a {
        font-size: 1.2rem;
        display: block;
    }

    nav ul li a:hover,
    nav ul li a.active {
        color: #2d3436;
        border: none;
    }

    /* Form */
    .container-profile {
        width: 100%;
        padding: 10px 25px;
        top: 0;
    }

    h3 {
        padding-top: 25px;
    }


    form {
        flex-direction: column;
    }

    form .right-profile {
        padding: 30px 50px;
    }

    form .left-profile {
        padding: 10px 10px;
    }
}
</style>