<?php
$content = 'login';
session_start();
$_SESSION['lastpage'] = "../app/login.php";
if (isset($_SESSION['Username'])) {
    if ($_SESSION['type']=='user'){
    header('location:../app/home.php');
    }
    elseif ($_SESSION['type']=='admin'){
        header('location:../admin/admin-index.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="robots" CONTENT="noindex,onfollow">
	<link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="bodycen">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-8 mx-auto">
                    <div class="card card-signin my-5  ">
                        <div class="card-body ">
                            <h5 class="card-title text-center my-5">เข้าสู่ระบบด้วยบัญชีสมาชิก / The Na thailand</h5>
                            <form class="form-signin" action="../auth/checkLogin.php" method="post">
                                <div class="form-label-group my-4">
                                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">ชื่อผู้ใช้</label>
                                </div>

                                <div class="form-label-group  my-4">
                                    <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">รหัสผ่าน</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-primary btn-block buttontt" type="submit">เข้าสู่ระบบ</button>

                            </form>
                            <!-- <a href="">สมัครสมาชิก</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
    }

    .card-signin {
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        background-color: #f7f7f7;
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        border-radius: 1rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: auto;
        border-radius: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    .btn-google {
        color: white;
        background-color: #ea4335;
    }

    .btn-facebook {
        color: white;
        background-color: #3b5998;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>