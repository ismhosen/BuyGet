<?php
include '../data/products_data_access.php';
$b_id=$_GET['b_id'];
$id=$_GET['id'];
$product_id=$_GET['p_id'];
// update_quantity($quantity,$c_id);
    // var_dump($quantity);

if(isset($_POST['delete']))
{
    delete_bookmark($b_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['delete_all']))
{
    delete_bookmark_all($id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['bookmark_index']))
{
    bookmark($id,$product_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['bookmark_laptop']))
{
    bookmark($id,$product_id);
    echo "<script>document.location='laptop.php';</script>";
}
else
{
    echo "<script>document.location='homepagebuyer.php';</script>";
}

