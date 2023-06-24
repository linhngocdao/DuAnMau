<?php
include "../global.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/phanhoi.php";
include "../model/giohang.php";
include "header.php";

//controller
if (isset($_GET['act'])) {
     $act = $_GET['act'];
     switch ($act) {
          case 'adddm';
               //kiểm tra người dùng có click vào nút add hay không 
               if (isset($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insertCate($tenloai);
                    header('location: index.php?act=listdm');
               }
               $listCates = selectCates();
               include "danhMuc/add.php";
               break;
          case 'listdm':
               $listCates = selectCates();
               include "danhMuc/list.php";
               break;
          case 'xoadm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    deleteCate($_GET['id']);
               }
               $listCates = selectCates();
               include "danhMuc/list.php";
               break;
          case 'suadm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $item = getOneItem($_GET['id']);
               }
               include '../admin/danhMuc/update.php';
               break;
          case 'updatedm':
               if (isset($_POST['themmoi'])) {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    updateCate($id, $tenloai);
                    header('location: index.php?act=listdm');
                    // echo '<script>alert("Bạn đã cập nhật thành công")</script>';
               }
               $listCates = selectCates();
               include '../admin/danhMuc/list.php';
               break;
               /**sản phẩm */
          case 'addsp';
               //kiểm tra người dùng có click vào nút add hay không 
               if (isset($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $pricesp = $_POST['pricesp'];
                    $img = $_FILES['imgsp']['name'];
                    $target_dir = "../public/image/";
                    $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                         echo "The file " . htmlspecialchars(basename($_FILES["imgsp"]["name"])) . " has been uploaded.";
                    } else {
                         echo "Sorry, there was an error uploading your file.";
                    }
                    $motasp = $_POST['motasp'];
                    insert_sanpham($tensp, $pricesp,  $img, $motasp, $iddm);
                    header('location: index.php?act=listsp');
                    $thongbao = "bạn đã thêm sản phẩm thành công";
               }
               $listCates = selectCates();
               // var_dump($listCates); show lên dữ liệu thô
               include "sanPham/add.php";
               break;
          case 'listsp':
               if (isset($_POST['fillter_pro']) && ($_POST['fillter_pro'])) {
                    $key_searchPro = $_POST['key_searchPro'];
                    $iddm = $_POST['iddm'];
               } else {
                    $key_searchPro = '';
                    $iddm = 0;
               }
               $listCates = selectCates(); // lấy all dữ liệu danh mục
               $listSp = select_sanpham($key_searchPro, $iddm);
               include "sanPham/list.php";
               break;
          case 'xoasp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
               }
               $listSp = select_sanpham("", 0);
               include "sanPham/list.php";
               break;
          case 'suasp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = getOneItem_sanpham($_GET['id']);
               }
               $listCates = selectCates();
               include '../admin/sanPham/update.php';
               break;
          case 'updatesp':
               if (isset($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $pricesp = $_POST['pricesp'];
                    $img = $_FILES['imgsp']['name'];
                    $target_dir = "../public/image/";
                    $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                         echo "The file " . htmlspecialchars(basename($_FILES["imgsp"]["name"])) . " has been uploaded.";
                    } else {
                         echo "Sorry, there was an error uploading your file.";
                    }
                    $motasp = $_POST['motasp'];
                    $id = $_POST['id'];
                    update_sanpham($tensp, $pricesp,  $img, $motasp, $iddm, $id);
                    header('location: index.php?act=listsp');
                    // echo '<script>alert("Bạn đã cập nhật thành công")</script>';
               }
               $listSp = select_sanpham("", 0);
               include '../admin/sanPham/list.php';
               break;
               //  Tài khoản 
          case 'listTk':
               $listAcc = dstaikhoan();
               include "taiKhoan/list.php";
               break;

          case 'xoatk':
               if (isset($_GET['id'])) {
                    deleteTK($_GET['id']);
               }
               $listAcc = dstaikhoan();
               include "taiKhoan/list.php";
               break;
               //Phản hồi
          case 'listPH':
               $listphanhoi = dsphanhoi();
               include "phanhoi/list.php";
               break;
          case 'xoaPH':
               if (isset($_GET['id'])) {
                    xoaphanhoi($_GET['id']);
               }
               $listphanhoi = dsphanhoi();
               include "phanhoi/list.php";
               break;
               //giỏ hàng
          case 'giohang':
               $listCart = showCart();
               include "giohang/list.php";
               break;
          case 'chitiet_giohang':
               if(isset($_GET['id'])) {
                         $get =$_GET['id'];
                    $DetailCart = DetailCart($get);
                    $infocart = showInfoCart($get);
                    // print_r($infocart); 
                    // print_r($DetailCart); 
                    if(isset($_POST['btn_status'])){
                         changeOrderStatus($_POST['status'],$get);
                         header("location:?act=giohang");
                     }
               }
          
               
               include "giohang/chitiet_giohang.php";
               break; 
          case 'remove_cart':
               if (isset($_GET['id'])) {
                    DeleteCart($_GET['id']);
               }
               $listCart = showCart();
               include "giohang/list.php";
               break;
          default:
               include "home.php";
               break;
     }
} else {
     include "home.php";
}



include "footer.php";
