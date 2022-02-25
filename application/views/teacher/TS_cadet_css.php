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

.container {
    margin-bottom: 60px;
    background-color: #fff;
    margin-top: 20px;
    border-radius: 5px;
}

.search-path {
    margin-bottom: 5em;
}

.title {
    font-size: 1.8rem;
    font-weight: 600;
    text-align: center;
    padding-top: 30px;
}

form {
    width: 650px;
    margin: 0 auto;
    padding: 40px 0
}

.col-auto {
    padding: 10px 15px;
}

select {
    width: 90%;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    border-color: #ced4da;
}

p {
    text-align: center;
    color: #FE0000;
    letter-spacing: 0.3px;
    padding: 0 10px;
}

.button {
    display: flex;
    align-content: center;
    flex-direction: row;
    justify-content: space-between;
}

a.btn-submit {
    padding: 15px 25px;
    border-radius: 10px;
    color: #f5f6fa;
    background: #0d6efd;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

a.btn-submit:hover {
    color: #f5f6fa;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    opacity: 0.8;
}

a.btn-reset {
    padding: 15px 25px;
    border-radius: 10px;
    color: #f5f6fa;
    background: #7A0025;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

a.btn-reset:hover {
    color: #f5f6fa;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    opacity: 0.8;
}

a.btn-submit,
a.btn-reset {
    text-align: center;
    margin: 0 5px;
}

a.btn-submit i,
a.btn-reset i {
    margin: 0 8px;
}

h3 {
    margin-bottom: 15px;
    padding: 0 15px;
}

.table-responsive-md {
    padding: 10px 80px;
}

th {
    font-weight: 600;
}

td a {
    text-decoration: none;
}

/* Modal Popup */
.popup-container {
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    position: fixed;
    opacity: 0;
    pointer-events: none;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: all 0.3s ease;
}

.popup-container.show {
    pointer-events: auto;
    opacity: 1;
}

.popup {
    background-color: #fff;
    width: 600px;
    max-width: 100%;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    padding: 20px 30px;
    margin-top: 50px;
}

h4 {
    padding-top: 15px;
    text-align: center;
}

.col-auto.popup {
    display: block;
    text-align: center;
    box-shadow: none;
}

.p-footer {
    display: block;
    text-align: right;
    margin: 10px 15px;
    padding-top: 20px;
}

.p-footer a {
    font-size: 1.1rem;
    font-weight: 500;
    color: #fff;
    background-color: #0d6efd;
    padding: 8px 20px;
    border-radius: 5px;
    text-decoration: none;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    cursor: pointer;
}

.p-footer i {
    font-size: 14px;
}

/* Responesive*/

@media only screen and (max-width: 768px) {
    nav {
        display: flex;
        padding: 0 20px;
    }

    nav .logo {
        font-size: 1rem;
    }

    /* Form */
    form {
        width: 100%;
        padding: 20px;
    }

    .search-path .title {
        font-size: 1.2rem;
    }

    .col-auto .input-group {
        font-size: 1rem;
    }

    select {
        width: 79%;
    }

    .button {
        padding: 0 20px;
        margin: 0 auto;
    }

    a.btn-submit,
    a.btn-reset {
        padding: 10px 25px;
    }

    /* Table */

    .table-responsive-md {
        padding: 10px 10px;
    }

    thead {
        display: none;
    }

    td {
        display: block;
    }

    td:first-child {
        background-color: #cfe2ff;
    }

    td:nth-child(1)::before {
        content: 'ลำดับ';
    }

    td:nth-child(2)::before {
        content: "รหัสนักเรียน";
    }

    td:nth-child(3)::before {
        content: "ชื่อ-นามสกุล";
    }

    td:nth-child(4)::before {
        content: "รุ่น";
    }

    td:nth-child(5)::before {
        content: "เหล่า";
    }

    td:nth-child(6)::before {
        content: "";
    }

    td {
        text-align: right;
    }

    td::before {
        float: left;
        margin-right: 3rem;
        font-weight: bold;
    }
}

@media only screen and (max-width: 1024px) {

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

    nav .logo {
        font-size: 1.2rem;
        margin-top: 10px;
    }

    #click:checked~ul {
        left: 0%;
    }

    nav ul li {
        line-height: 3.5rem;
    }

    nav ul li a {
        font-size: 1rem;
        display: block;
    }

    nav ul li a:hover {
        color: #2d3436;
        background-color: #73a7f3;
        font-weight: bold;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    nav ul li a.active {
        color: #2d3436;
        background-color: #97c0fb;
        font-weight: bold;
        border: none;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    a.btn-log {
        border: none;
        border-radius: 0px;
        box-shadow: none;
    }
}

/* @media only screen and (min-width: 1024px) {
    nav {
        padding: 0 20px;
        flex-direction: column;
        height: 150px;
        margin-bottom: 20px;
    }

    nav .logo {
        margin-top: 10px;
        font-size: 1.4rem;
    }

    nav ul {
        padding: 10px 0;
    }

    nav ul li a {
        font-size: 1rem;
        display: block;
    }
} */
</style>