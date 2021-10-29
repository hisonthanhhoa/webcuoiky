<?php
     include_once('xulydangnhap.php');
     require_once('../config.php');
 
     if ($dang_nhap) {
         header('location: trangchu.php');
     }
 
     if (isset($_POST['login'])) {
         $ten_dang_nhap = $_POST['ten_dang_nhap'];
         $mat_khau = $_POST['mat_khau'];
 
         $query = "SELECT id, username, password, roles FROM admin WHERE username = '$ten_dang_nhap' LIMIT 1";
         $rs = mysqli_query($conn, $query);
 
         if (!$rs) {
             // Hiển thị ra thông báo không tồn tại tài khoản
             
         }
 
         $row = mysqli_fetch_array($rs);
 
         if (!hash_equals($row['mat_khau'], crypt($mat_khau, $row['mat_khau']))) {
             // Hiển thị ra thông báo sai mật khẩu
     
         } else {
             $_SESSION['admin_login']['id'] = $row['id'];
             $_SESSION['admin_login']['ten_dang_nhap'] = $row['ten_dang_nhap'];
             $_SESSION['admin_login']['roles'] = $row['roles'];
 
             header('location: trangchu.php');
         }
 
     }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <style>
        body {
            background-image: white;
            padding: 20px;
        }
        
        .frame {
            left: 50%;
            top: 50%;
            position: absolute;
            transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);
        }
        
        .frame,
        .input-group,
        button {
            border: 1px solid rgb(200, 200, 200);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
            background: rgba(200, 200, 200, 0.1);
            border-radius: 4px;
            height: auto;
        }
        
        .form-group button {
            width: auto;
        }
        
        .logo {
            float: left;
        }
        
        .content {
            float: left;
        }
        
        h4 {
            font-size: 2.2vw;
            padding-top: 1vw;
            text-align: center;
            color: #3289a8;
        }
        
        .form-group {
            padding-right: 3vw;
            padding-left: 3vw;
            padding-top: 1vw;
            padding-bottom: 0.3vw;
        }
        
        .support-information p {
            font-size: 10px;
        }
        
        .support-information {
            margin: 8.5vw auto 0 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="frame ">
                <div class="col-md-6 " id="box">
                    <div class="logo"><img src="../Assets/Image/logo-login.png" class="img-fluid"></div>
                </div>
                <div class=" col-md-6 content" id="box">
                    <div class="title d-none d-sm-block">
                        <h4>THUY LOI UNIVERSITY</h4>
                        <hr>
                    </div>
                    <form class="row" action="login.php" method="post" id="login_form">
                        <div class="form-group">
                            <div class="col-md">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <input name="ten-dang-nhap" placeholder="Admin" class="form-control" type="text" id="ten-dang-nhap">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input name="mat-khau" placeholder="Password" class="form-control" type="password" id="mat-khau">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="button-login col-md-12 d-flex align-items-end justify-content-center">
                                <button type="button" class="btn btn-danger " name="login">Đăng nhập </button>
                            </div>
                        </div>
                    </form>
                    <div class="support-information text-center d-none d-xl-block">
                        <p>2021 © CNTT.TLU</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>