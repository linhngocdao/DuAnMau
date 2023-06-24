<?php
function insert_giohang($hovaten,$sodienthoai,$diachi,$ghichu,$total)
{
    $sql = "INSERT INTO giohang(hovaten,sodienthoai,diachi,ghichu, tonggia) VALUES ('$hovaten','$sodienthoai','$diachi','$ghichu','$total')";
  return  pdo_executes($sql);
}
function insert_chitiet_giohang($name,$img,$price,$qty, $id_giohang)
{
    $sql = "INSERT INTO chitiet_giohang(name,img,price,qty,id_giohang) VALUES ('$name','$img','$price','$qty', '$id_giohang')";
  return  pdo_execute($sql);
}
function showCart() {
  $sql = "SELECT * FROM giohang  order by id desc"; 
  return pdo_query($sql);
}
function DetailCart($id) {
  $sql = "SELECT * FROM chitiet_giohang WHERE id_giohang='$id'";
  return pdo_query($sql);
}
function showInfoCart($id) {
  $sql = "SELECT * FROM giohang WHERE id=?";
  return pdo_query($sql,$id);
}
function DeleteCart($id) {
  $sql = "DELETE FROM giohang WHERE id=?";
  return pdo_execute($sql,$id);
}
function changeOrderStatus($trangthai,$id)  {
  $sql = "UPDATE giohang SET trangthai='$trangthai' WHERE id='$id'";
  return pdo_execute($sql);
}
