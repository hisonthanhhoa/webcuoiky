<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang Quản Trị Hệ Thống</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../Assets/Css/main.css">
    </head>
    <body>
        <div class="top-side " style="background-color: #2b3643;">
            <div class="frame-top" style="background-color: rgba(0, 0, 0, 0.2);">
                <div class="row  align-items-center page-header justify-content-between">
                    <div class="col-md-6 col-6 col-sm-6">
                        <div class=" d-flex  header-logo">
                            <div class="logo col-md-2 col-2 col-sm-2 text-center">
                                <a href="">
                                    <img src="../Assets/Image/logo-small.png" alt="logo" class="img-logo">
                                </a>
                            </div>
                            <div class="menu-toggle col-md-4 col-4 col-sm-4 text-center">
                                <i class="bi bi-list icon-toggle" id="show" ></i>
                            </div>
                        </div>
                    </div>
                    <div id="Dang-nhap " class="col-md-6 col-6 col-sm-6 " style="font-size:15px;color:grey;padding-top: 10px;">
                        <div class="dropdown pb-4 text-end">
                            <div class="block">
                            <a href="#" class="text-white text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <span><i class="bi bi-person-circle"></i></span>
                                <span class="d-none d-sm-inline mx-1">admin</span> 
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow ">
                                <li><a class="dropdown-item" href="#">Đóng phiên làm việc</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar" style="background-color: #2b3643;">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="navbar-nav nav-pills" id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Trang chủ">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 ">Trang chủ</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" data-bs-toggle="tooltip" data-bs-placement="right" title="Đăng ký học">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 ">Quản Lí Sinh Viên</span> </a>
                                <ul class="collapse  nav flex-column" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Đăng ký học"><i class="bi bi-card-checklist icon-nav" style="padding-right:10px"></i><span class="ms-1">Đăng ký học </span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Kết quả đăng ký học"><i class="bi bi-card-checklist icon-nav" style="padding-right:10px"></i><span class="ms-1">Kết quả đăng ký học</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link px-0 align-middle" data-bs-toggle="tooltip" data-bs-placement="right" title="Tra cứu học phí">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1">Quản Lý Giảng Viên</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle" data-bs-toggle="tooltip" data-bs-placement="right" title="Chương trình đào tạo">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 ">Quản Lí Sinh Viên Đăng ký</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link px-0 align-middle" data-bs-toggle="tooltip" data-bs-placement="right" title="Thông tin sinh viên">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1">Kỳ Học</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="container mt-5">
                        <div class="row">
                          <div class="col-sm-8">
                            <h2>TITLE HEADING</h2>
                            <h5>Title description, Dec 7, 2020</h5>
                            <div class="fakeimg">Fake Image</div>
                            <p>Some text..</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      
                            <h2 class="mt-5">TITLE HEADING</h2>
                            <h5>Title description, Sep 2, 2020</h5>
                            <div class="fakeimg">Fake Image</div>
                            <p>Some text..</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                          </div>
                          <div class="col-sm-4">
                            <h2>About Me</h2>
                            <h5>Photo of me:</h5>
                            <div class="fakeimg">Fake Image</div>
                            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                            <h3 class="mt-4">Some Links</h3>
                            <p>Lorem ipsum dolor sit ame.</p>
                            <ul class="nav nav-pills flex-column">
                              <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                              </li>
                            </ul>
                            <hr class="d-sm-none">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../Assets/Js/toggle.js" async defer></script>
    </body>
    <footer class="text-center text-white" style="background-color: #2b3643;">
        <div class="container p-4 pb-0">
          <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-facebook"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-twitter"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-google"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-instagram"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-github"></i></a>
          </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 CNTT-TLU:
            <a class="text-white" href="#">Thuy Loi University</a>
        </div>
    </footer>
</html>
<!-- class="d-none d-sm-inline " -->