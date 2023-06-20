<?php

ob_start();
//hàm format giá 
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = ' vnd') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
$ROOT = '/DuAn';
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT . '../public/image/';
function upload_file($file,$path_dir){
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}

?>




