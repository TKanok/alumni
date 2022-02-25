<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,500;0,600;1,400&display=swap'); */
    @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,500;0,600;1,400&display=swap');

    :root {
        --first: #FE0000;
        --second: #0000FE;
        --third: #6DCFF6;
        --forth: #7A0025;
        --main: #f5f6fa;
        --primary: #2d3436;
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Chakra Petch', sans-serif;
    }

    html,
    body {
        background: url("<?= base_url('image/bg-horizon-Re.png'); ?>");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }

    .login-form {
        width: 600px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        background-color: #f5f6fa;
        border-radius: 1rem;
        padding: 20px;
        margin: 8% auto 0;
        line-height: 1.6;
    }

    .img-top {
        text-align: center;
    }

    h4 {
        font-size: calc(0.4rem + 1.4rem);
        text-align: center;
        font-weight: 500;
        padding: 7px;
    }

    .split {
        display: flex;
        flex-wrap: wrap;
        align-content: center;
        justify-content: space-around;
        align-items: center;
    }

    form {
        padding: 10px 20px;
        margin: 5px 10px;
    }

    .form-group {
        margin: 10px 0px;
    }

    label {
        margin-bottom: 10px;
    }

    input {
        width: 100%;
        border: none;
        outline: none;
        background: #f5f6fa;
        border-bottom: 1px solid #2d3436;
        padding: 5px;
    }

    input:hover {
        box-shadow: inset 1px 2px 4px rgba(0, 0, 0, 0.3);
        border-bottom: 2px solid #2d3436;
    }

    .btn {
        background-color: #2d3436;
        color: #f5f6fa;
        width: 100%;
        margin: 20px 0;
        padding: 10px;
        filter: drop-shadow(2px 2px 6px #2d3442);
    }

    .btn:hover {
        background-color: #2d3440;
        color: #f5f6fa;
        filter: drop-shadow(2px 2px 6px #2d3450);
        transition: 0.3s;
    }

    .sub-link {
        margin: 0 10px;
        line-height: 2.5;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    i {
        margin-right: 5px;
    }

    li a {
        text-decoration: none;
        color: #2d3436;
        background: #f5f6fa;
    }

    li a:hover,
    i:hover {
        font-size: 1.2rem;
        color: #353b48;
        text-decoration: underline;
        transition: 0.2s;
    }


    /* Responsive */

    @media screen and (max-width: 475px) {

        .login-form {
            width: 340px;
        }

        form {
            padding: 0px;
            width: 100%;
        }

        img {
            width: 140px;
            height: 140px;
        }

    }
</style>