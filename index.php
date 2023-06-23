<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/image/fevicon.png" type="image/png" />
    <title>Linh shop</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>


    <script src="sweetalert2.min.js"></script>

</body>

</html>
<?php
ob_start();
session_start();
if (!$_POST) $_POST = $_GET;

if (!isset($_SESSION['mycart']))   $_SESSION['mycart'] = [];
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";
include "model/phanhoi.php";
include "model/giohang.php";

if ((isset($_GET['act']))) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            include "view/products.php";
            break;
        case 'news':
            include "view/news.php";
            break;
        case 'contact':
            if (isset($_POST['main_btn'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $content = $_POST['content'];
                $res = guiphanhoi($name, $email, $number, $content);

                $thongbao = "Cảm ơn bạn đã gửi phản hồi cho chúng tôi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất !";
            }
            include "view/contact.php";
            break;
        case 'detailProduct':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $one_sp =  getOneItem_sanpham($id);
                $view = $one_sp['view'] + 1;
                updateView($view, $id);
                include "view/detailPro.php";
            } else {
                // include "view/home.php";

            }

            break;
        case 'signin':
            if (isset($_POST['btn'])) {
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $res = kiemtraTaiKhoan($taikhoan, $matkhau);

                if ($res != null) {
                    $item = [
                        'taikhoan' => $res['taikhoan'],
                        'matkhau' => $res['matkhau'],
                        'role' => $res['role'],
                        'id' => $res['id'],
                        'hovaten' => $res['hovaten'],
                    ];
                    $_SESSION['taikhoan'] = $item;
                    header("location: " . $ROOT . "/index.php");
                } else {
                    $thongbao = "bạn đã đăng nhập sai";
                }

                if ($res['role'] == 1) {
                    exit(header("Location: admin"));
                }
            }
            include "view/taikhoan/signin.php";
            break;
        case 'signup':
            if (isset($_POST['btn'])) {
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $hovaten = $_POST['hovaten'];
                $res =  themtaikhoan($taikhoan, $matkhau, $hovaten);
                if ($res == 1) {
                    // thành công thông báo thành công ; chuyển hướng tới trang chủ
                    $kq = "Đăng ký thành công, vui lòng đăng nhập để bình luận";
                } else {
                    $kq = "Đăng ký thất bại";
                }
            }
            include "view/taikhoan/signup.php";
            break;

        case 'forgot':
            if (isset($_POST['forgot_pass'])) {
                $taikhoan = $_POST['taikhoan'];
                $res =  quenmk($taikhoan);

                if (is_array($res)) {
                    $thongbao = "Mật khẩu của bạn là :" . $res['matkhau'];
                } else {
                    $thongbao = "Tài khoản này không tồn tại ";
                }
                // header('Location: index.php?act=signin');
            }
            include "view/taikhoan/forgot.php";
            break;
        case 'search':
            if (isset($_GET['key'])) {
                $key = '%' . $_GET['key'] . '%';
                $search = searchProducts($key);
            }
            include "view/search.php";
            break;
        case 'addcart':
            if (isset($_POST['addcart'])) {
                $sp = $_POST;
                $item = [
                    'id' => $sp['id'],
                    'name' => $sp['name'],
                    'img' => $sp['img'],
                    'price' => $sp['price'],
                    'qty' => $_POST['qty'],
                ];

                if (isset($_SESSION['mycart'][$sp['id']])) {
                    if ($_SESSION['mycart'][$sp['id']]['id'] == $sp['id']) {
                        $_SESSION['mycart'][$sp['id']]['qty'] += $sp['qty'];
                       
                    }
                } else {
                    $_SESSION['mycart'][$sp['id']] = $item;
                }

            }

            if (isset($_POST['dathang'])) {
                $hovaten = $_POST['hovaten'];
                $sodienthoai = $_POST['sodienthoai'];
                $diachi = $_POST['diachi'];
                $ghic = $_POST['ghichu'];
                $total = 0;
                foreach ($_SESSION['mycart'] as $key => $value) {
                    $total += $value['qty'] * $value['price'];
                }

                $res = insert_giohang($hovaten, $sodienthoai, $diachi, $ghic, $total);
         
                foreach ($_SESSION['mycart'] as $keya => $valuea) {
                    insert_chitiet_giohang($valuea['name'], $valuea['img'],$valuea['price'], $valuea['qty'], $res);
                }
                unset($_SESSION['mycart']);
                
                header("location:?act=thank");  exit;
              
            }

            include "view/cart/viewcart.php";
            case 'thank':
                include "view/cart/thank.php";
                break;
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                unset($_SESSION['mycart'][$_GET['id']]);
            }
            include "view/cart/viewcart.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php"
?>