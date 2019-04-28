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
else if(isset($_POST['save_laptop']))
{
   update_quantity($quantity,$c_id);
   echo "<script>document.location='laptop.php';</script>";
}
else if(isset($_POST['delete_laptop']))
{
    delete_cart($c_id);
    echo "<script>document.location='laptop.php';</script>";
}
else if(isset($_POST['delete_all_laptop']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='laptop.php';</script>";
}
else if(isset($_POST['save_order']))
{
//    echo "<script>alert($quantity)</script>";
   update_quantity($quantity,$c_id);
   echo "<script>document.location='order.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_order']))
{
    delete_cart($c_id);
    echo "<script>document.location='order.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_all_order']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='order.php?id=$product_id';</script>";
}
else if(isset($_POST['save_details']))
{
   update_quantity($quantity,$c_id);
   echo "<script>document.location='product_details.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_details']))
{
    delete_cart($c_id);
    echo "<script>document.location='product_details.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_all_details']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='product_details.php?id=$product_id';</script>";
}
else if(isset($_POST['save_new']))
{
   update_quantity($quantity,$c_id);
   echo "<script>document.location='newproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_new']))
{
    delete_cart($c_id);
    echo "<script>document.location='newproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_all_new']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='newproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['save_discount']))
{
   update_quantity($quantity,$c_id);
   echo "<script>document.location='discounts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_discount']))
{
    delete_cart($c_id);
    echo "<script>document.location='discounts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_all_discount']))
{
    delete_cart_all($user_id);
    echo "<script>document.location='discounts.php?id=$product_id';</script>";
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
else if(isset($_POST['add_to_cart_discount']))
{
    // var_dump(mysqli_num_rows(product_cart_check($product_id,$user_id)));
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='discountproducts.php';</script>";
    }
    else
        echo "<script>document.location='discountproducts.php?error=cart_bookmark_error';</script>";
    
}
else if(isset($_POST['add_to_cart_new']))
{
    // var_dump(mysqli_num_rows(product_cart_check($product_id,$user_id)));
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='newproducts.php';</script>";
    }
    else
        echo "<script>document.location='newproducts.php?error=cart_bookmark_error';</script>";
    
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
else if(isset($_POST['add_to_cart_order']))
{
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='order.php?id=$product_id';</script>";
    }
    else
        echo "<script>document.location='order.php?id=$product_id&error=cart_bookmark_error';</script>";
}
else if(isset($_POST['add_to_cart_details']))
{
    if(mysqli_num_rows(product_cart_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        add_to_cart($user_id,$product_id);
        echo "<script>document.location='product_details.php?id=$product_id';</script>";
    }
    else
        echo "<script>document.location='product_details.php?id=$product_id&error=cart_bookmark_error';</script>";
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
else if(isset($_POST['delete_bookmark_laptop']))
{
    delete_bookmark($b_id);
    echo "<script>document.location='laptop.php';</script>";
}
else if(isset($_POST['delete_bookmark_all_laptop']))
{
    delete_bookmark_all($user_id);
    echo "<script>document.location='laptop.php';</script>";
}

else if(isset($_POST['delete_bookmark_details']))
{
    // echo "<script>alert('hello');</script>";
    delete_bookmark($b_id);
    echo "<script>document.location='product_details.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_all_details']))
{
    delete_bookmark_all($user_id);
    echo "<script>document.location='product_details.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_order']))
{
    // echo "<script>alert('hello');</script>";
    delete_bookmark($b_id);
    echo "<script>document.location='order.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_all_order']))
{
    // echo "<script>alert('$c_id');</script>";
    delete_bookmark_all($c_id);
    echo "<script>document.location='order.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_new']))
{
    // echo "<script>alert('hello');</script>";
    delete_bookmark($b_id);
    echo "<script>document.location='newproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_all_new']))
{
    // echo "<script>alert('$c_id');</script>";
    delete_bookmark_all($c_id);
    echo "<script>document.location='newproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_discount']))
{
    // echo "<script>alert('hello');</script>";
    delete_bookmark($b_id);
    echo "<script>document.location='discountproducts.php?id=$product_id';</script>";
}
else if(isset($_POST['delete_bookmark_all_discount']))
{
     echo "<script>alert('$b_id');</script>";
    delete_bookmark_all($b_id);
    echo "<script>document.location='discountproducts.php?id=$product_id';</script>";
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
else if(isset($_POST['bookmark_discount']))
{    
    if(mysqli_num_rows(product_bookmark_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        bookmark($user_id,$product_id);
        echo "<script>document.location='discountproducts.php';</script>";
    }
    else
        echo "<script>document.location='discountproducts.php?error=cart_bookmark_error';</script>";
}
else if(isset($_POST['bookmark_laptop']))
{    
    if(mysqli_num_rows(product_bookmark_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        bookmark($user_id,$product_id);
        echo "<script>document.location='laptop.php';</script>";
    }
    else
        echo "<script>document.location='laptop.php?error=cart_bookmark_error';</script>";
}
else if(isset($_POST['bookmark_new']))
{    
    if(mysqli_num_rows(product_bookmark_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        bookmark($user_id,$product_id);
        echo "<script>document.location='newproducts.php';</script>";
    }
    else
        echo "<script>document.location='newproducts.php?error=cart_bookmark_error';</script>";
}
else if(isset($_POST['bookmark_details']))
{    
    if(mysqli_num_rows(product_bookmark_check($product_id,$user_id))==0)
    {
        // echo "<script>alert('hello');</script>";
        bookmark($user_id,$product_id);
        echo "<script>document.location='product_details.php?id=$product_id';</script>";
    }
    else
        echo "<script>document.location='product_details.php?id=$product_id&error=cart_bookmark_error';</script>";
}
else
{
    echo "<script>document.location='homepagebuyer.php';</script>";
}

