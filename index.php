<?php
ob_start();
session_start();
if(!$_POST) $_POST = $_GET;
 include "model/pdo.php";
 include "model/sanpham.php";
 include "view/header.php";
 include "global.php";
 include "model/taikhoan.php";

    if((isset($_GET['act']))){
        $act=$_GET['act'];
        switch ($act) {
            case 'product':
                include "view/products.php";
                break;
            case 'news':
                include "view/news.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;
            case 'detailProduct':
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $one_sp =  getOneItem_sanpham($id);
                    $view = $one_sp['view'] + 1; 
                    updateView($view,$id); 
                    include "view/detailPro.php";      
                }else{
                    // include "view/home.php";
                  
                }
               
                break;
            case 'signin':
                if(isset($_POST['btn'])) { 
                    $taikhoan = $_POST['taikhoan'];
                    $matkhau = $_POST['matkhau'];
                    $res = kiemtraTaiKhoan($taikhoan, $matkhau);
                    
                    if($res != null ) {
                        $item = [
                            'taikhoan' => $res['taikhoan'],
                            'matkhau' => $res['matkhau'],
                            'role' => $res['role'],
                            'id' => $res['id'],
                            'hovaten'=>$res['hovaten'],
                        ];
                        $_SESSION['taikhoan'] = $item;
                        header("location: ".$ROOT."/index.php");
                    }else {
                       $thongbao="bạn đã đăng nhập sai";
                    }

                    if($res['role'] == 1) {
                        exit(header("Location: admin"));
                    }
                    
                }
                include "view/signin.php";
                break;
            case 'signup':
                    if(isset($_POST['btn'])) {
                        $taikhoan = $_POST['taikhoan'];
                        $matkhau = $_POST['matkhau'];
                        $hovaten = $_POST['hovaten'];
                        $res =  themtaikhoan($taikhoan,$matkhau,$hovaten);
                        if($res == 1) {
                                    // thành công thông báo thành công ; chuyển hướng tới trang chủ
                                    $kq = "Đăng ký thành công, vui lòng đăng nhập để bình luận";  
                        }else {
                            $kq = "Đăng ký thất bại";
                        }
                    }
                    include "view/signup.php";
                    break; 
             case 'search':
                if(isset($_GET['key'])){
                    $key = '%'.$_GET['key'].'%';
                    $search = searchProducts($key);
                    
                }
                  include "view/search.php";
                   break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

 
 include "view/footer.php"
?>