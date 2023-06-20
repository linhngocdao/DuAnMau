<?php
function insertCate($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function selectCates()
{
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listCates = pdo_query($sql);
    return $listCates;
}
function updateCate($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET name ='$tenloai' WHERE id ='$id'";
    pdo_execute($sql);
}
function deleteCate($id)
{
    $sql = "DELETE FROM danhmuc WHERE id =" . $id;
    pdo_execute($sql);
}
function getOneItem($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id =" . $id;
    $item = pdo_query_one($sql);
    return $item;
}
function load_ten_dm($iddm){
    if ($iddm>0) {
    $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else {
        return "";
    }
}

function detailCategorys($idcategory) {
    $sql = "SELECT * FROM products WHERE idcategory=?";
    return pdo_query($sql,$idcategory);
}