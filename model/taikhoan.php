<?php
function themtaikhoan($taikhoan,$matkhau,$hovaten)
{
    $sql = "INSERT INTO taikhoan(id,taikhoan,matkhau,hovaten,role) VALUES (null, '$taikhoan', '$matkhau', '$hovaten', 0)";
    return pdo_execute($sql);
    
}

function kiemtraTaiKhoan($taikhoan, $matkhau)
{
    $sql = "SELECT * FROM taikhoan WHERE taikhoan = '$taikhoan' AND  matkhau = '$matkhau'";
    $item = pdo_query_one($sql);
    return $item;
}
function quenmk($taikhoan)
{
    $sql = "SELECT * FROM taikhoan WHERE taikhoan = '$taikhoan'";
    $item = pdo_query_one($sql);
    return $item;
}

function dstaikhoan()
{
    $sql = "SELECT * FROM taikhoan order by id desc";
    $listacc = pdo_query($sql);
    return $listacc;
}
function deleteTK($id)
{
    $sql = "DELETE FROM taikhoan WHERE id =" . $id;
    pdo_execute($sql);
}
