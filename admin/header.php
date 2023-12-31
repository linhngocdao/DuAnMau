<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="../public/css/adminCss/style.css" />
        <title>Linh Shop</title>
</head>

<body>
        <div class="d-flex" id="wrapper">
                <!-- Sidebar -->
                <div class="bg-white" id="sidebar-wrapper">
                        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>Quản Trị</div>
                        <div class="list-group list-group-flush my-3">
                                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                                <a href="index.php?act=listsp" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-gift me-2"></i>Sản phẩm </a>
                                <a href="index.php?act=listdm" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>Danh mục sản phẩm</a>
                                <a href="index.php?act=listTk" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>Khách hàng</a>
                                <a href="index.php?act=dsbl" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Bình luận</a>
                                <a href="index.php?act=thongke" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Thống kê</a>
                                <a href="index.php?act=listPH" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-map-marker-alt me-2"></i>Phản hồi</a>
                                <a href="?act=giohang" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-shopping-cart me-2"></i>Đơn hàng</a>
                        </div>
                </div>
                <!-- /#sidebar-wrapper -->
                        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Quản trị</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Đào Ngọc Linh
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/DuAn">Trang chủ</a></li>
                                <li><a class="dropdown-item" name="logout" href="../logout.php">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>