<?php
include '../service/product_services.php';
$quantity=$_GET['str'];
$c_id=$_GET['c_id'];
$b_id=$_GET['b_id'];
$user_id=$_GET['id'];
$product_id=$_GET['p_id'];
$quantity=$_POST['quantity'];
// update_quantity($quantity,$c_id);
    // var_dump($quantity);
if(isset($_POST['save']))
{
   update_quantity($quantity,$c_id);
   echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['delete']))
{
    delete_cart($c_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['delete_all']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['add_to_cart_index']))
{
    // var_dump(mysqli_num_rows(product_cart_check($product_id,$user_id)));
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='homepagebuyer.php';</script>";
    }
    else
        echo "<script>document.location='homepagebuyer.php?error=cart_bookmark_error';</script>";
    
}
else if(isset($_POST['add_to_cart_laptop']))
{
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='laptop.php';</script>";
    }
    else
        echo "<script>document.location='laptop.php?error=cart_bookmark_error';</script>";
}
else if(isset($_POST['delete_bookmark']))
{
    delete_bookmark($b_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['delete_bookmark_all']))
{
    delete_bookmark_all($user_id);
    echo "<script>document.location='homepagebuyer.php';</script>";
}
else if(isset($_POST['bookmark_index']))
{    
    if(mysqli_num_rows(product_bookmark_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        bookmark($user_id,$product_id);
        echo "<script>document.location='homepagebuyer.php';</script>";
    }
    else
        echo "<script>document.location='homepagebuyer.php?error=cart_bookmark_error';</script>";
}
else if(isset($_POST['bookmark_laptop']))
{
    bookmark($user_id,$product_id);
    echo "<script>document.location='laptop.php';</script>";
}
else
{
    echo "<script>document.location='homepagebuyer.php';</script>";
}

