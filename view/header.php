<?php
include "model/danhmuc.php";
//  print_r($_SESSION['taikhoan']); 
//  in ra thông tin tài khoản khi đăng nhập thành công 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="public/image/fevicon.png" type="image/png" />
  <title>Linh shop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/vendors/linericon/style.css">
  <link rel="stylesheet" href="public/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/themify-icons.css">
  <link rel="stylesheet" href="public/css/flaticon.css">
  <link rel="stylesheet" href="public/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="public/vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="public/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="public/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="public/vendors/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!------ Include the above in your HEAD tag ---------->

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- main css -->
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/responsive.css">
  <style>
    .logo_h img{width: 120px !important;}
    .logo_h{padding-bottom: 35px !important;}
    .menu_header{padding-top: 20px !important;}   
    .btn-log { background: #FF4742;border: 1px solid #FF4742; border-radius: 6px; box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px; box-sizing: border-box; color: #FFFFFF; cursor: pointer; display: inline-block; font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif; font-size: 14px; font-weight: 200; outline: 0; padding: 5px 10px; text-align: center; text-rendering: geometricprecision; text-transform: none;  user-select: none; -webkit-user-select: none; touch-action: manipulation;vertical-align: middle; margin-left: 50px;}
    .btn-log:hover,.btn-log:active { background-color: initial; background-position: 0 0; color: #FF4742;}
    .btn-log:active { opacity: .5;}
    .text_us{color: blue; padding-bottom: -10000px;}

  </style>
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Liên hệ: 0865 058 159</p>
              <p>email: daongoclinh22@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="cart.html">
                    Giỏ hàng
                  </a>
                </li>
                <li>
                  <a href="tracking.html">
                    Đơn hàng
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Liên hệ
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <a class="navbar-brand logo_h" href="?act=/">
            <img src="public/image/logo.png" alt="" />
          </a>
          <button class="nav_togle navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="menu_header col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                  </li>
                  <li class="nav-item submenu ">
                    <a href="index.php?act=product" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                    <ul class="dropdown-menu">
                      <?php
                      $listCates = selectCates();
                      foreach ($listCates as $key => $value) {
                        echo ' <li class="nav-item">
                            <a class="nav-link" href="index.php?act=product&&iddm=' . $value['id'] . '">' . $value['name'] . '</a>
                          
                            </li>
                           ';
                      }
                      ?>
                      <!-- <a href="?category='.$value['id'].'">'.$value['name'].'</a> -->
                    </ul>
                  </li>
                  <li class="nav-item submenu">
                    <a href="index.php?act=news" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?act=contact">Liên hệ</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <form method="POST">
                      <div class="input">
                        <input type="text" placeholder="Xin mời nhập ..." name="key_search" id="key">
                      </div>
                      <?php
                      if (isset($_POST['key_search'])) {
                        $key_search = "?act=search&key=" . $_POST['key_search'];
                        header('Location: ' . $key_search);
                      }
                      ?>
                      <div class="icon">
                        <i class="ti-search" aria-hidden="true"></i>
                      </div>
                    </form>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item submenu">
                    <a href="index.php?act=signin" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                      <ul class="dropdown-menu">
                        <?php

                        if (isset($_SESSION['taikhoan'])) {
                          echo ' <p class="text_us">Chào,<b> ' . $_SESSION['taikhoan']['hovaten'] . '</b> </p><br>
                            <a class="btn-log" href="./logout.php">Đăng xuất</a>
                            ';
                        }
                        ?>
                      </ul>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->