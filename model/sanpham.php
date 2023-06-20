<?php
function insert_sanpham($name,$price,$img,$mota,$iddm)
{
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES ('$name','$price','$img','$mota','$iddm')";
    pdo_execute($sql);
}
function select_sanpham($key_searchPro,$iddm)
{
    $sql = "SELECT * FROM sanpham where 1";
    if ($key_searchPro!="") {
        $sql.=" and name like '%".$key_searchPro."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham( $tensp, $pricesp,  $hinh, $motasp,$iddm, $id)
{
    if ($hinh != "")
    $sql = "UPDATE sanpham SET name ='$tensp', price ='$pricesp', img ='$hinh', mota='$motasp', iddm = '$iddm'  WHERE id ='$id'";
    else
    $sql = "UPDATE sanpham SET name ='$tensp', price ='$pricesp', img ='$hinh', mota='$motasp', iddm = '$iddm'  WHERE id ='$id'";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id =" . $id;
    pdo_execute($sql);
}
function getOneItem_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id =" .$id;
    $item = pdo_query_one($sql);
    return $item;
}
function updateView($view,$id) {
    $sql = "UPDATE sanpham SET view=? WHERE id=?";
    return pdo_execute($sql,$view,$id);
}

function getAllProHome($limit){
    $sql = "SELECT * FROM sanpham ORDER BY id";
    if($limit > 0 ) {
        $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT $limit";
    }
    return pdo_query($sql);
}

function getAll(){

    $sql = "SELECT * FROM sanpham ORDER BY id DESC";
    return pdo_query($sql);
}

function sanpham_cugloai($id,$iddm){
    $sql ="SELECT * FROM sanpham WHERE iddm = $iddm AND <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function searchProducts($key) {
    $sql = "SELECT * FROM sanpham WHERE name LIKE '$key'";
    return pdo_query($sql);
}
function showDetailProduct($id) {
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query($sql,$id);
}

