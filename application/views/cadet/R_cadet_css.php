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
    box-sizing: border-box;
    margin: 0;
    padding: 0;
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

.container {
    background: #fff;
    margin: 0 auto;
    width: 1366px;
    position: relative;
    top: 50px;
    border-radius: 5px;
    padding: 30px 50px;
}

.title {
    font-size: 1.6rem;
    font-weight: bold;
    position: relative;
    margin-bottom: 10px;
}

.col-md-3,
.col-md-4,
.col-md-6,
.col-md-12 {
    padding: 15px 30px;
}

span {
    font-size: 1.1rem;
}

input.form-control {
    border: 0;
    border-radius: 0px;
    border-bottom: 1px solid #555;
    background: transparent;
    width: 100%;
    padding: 8px 0 5px 0;
    font-size: 16px;
    font-size: 16px;
}

input.form-control:focus {
    border: none;
    outline: none;
    border-bottom: 1px solid #e74c3c;
    box-shadow: none;
    padding: 12px 10px;
}

hr {
    border: 1px solid #ccc;
    margin: 30px 0 30px 0;
}

select.custom-select {
    border: none;
    border-bottom: 1px solid;
}

select.custom-select:focus {
    border: none;
    outline: none;
    border-bottom: 1px solid #e74c3c;
    box-shadow: none;
    padding: 12px 10px;
}

.row.upload-file {
    padding: 20px;
}

.row.button {
    display: block;
    text-align: right;
    margin-top: 50px;
    padding: 40px;
}

a.btn-primary {
    color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    margin-right: 10px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}

a.btn-danger {
    padding: 20px 50px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}

.btn-primary:hover,
.btn-danger:hover {
    text-decoration: none;
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

    .container {
        width: 100%;
        padding: 10px 20px;
        top: 0;
    }

    .title {
        text-align: initial;
    }

    a.button {
        display: block;
        margin-top: 40px;
    }

    a.btn-primary,
    a.btn-danger {
        color: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        margin-right: 10px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
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

    .title {
        text-align: initial;
    }

    .row.button {
        display: block;
        margin: 40px 0;
    }


}
</style>