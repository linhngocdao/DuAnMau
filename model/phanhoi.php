<?php
function guiphanhoi($name,$email,$number,$content)
{
    $sql = "INSERT INTO phanhoi(name,email,number,content) VALUES ('$name','$email','$number','$content')";
    pdo_execute($sql);
}
function dsphanhoi()
{
    $sql = "SELECT * FROM phanhoi order by id desc";
    $listphanhoi = pdo_query($sql);
    return $listphanhoi;
}
function xoaphanhoi($id)
{
    $sql = "DELETE FROM phanhoi WHERE id =" . $id;
    pdo_execute($sql);
}