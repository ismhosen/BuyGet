<?php
session_start();
// include '../data/products_data_access.php';
include '../app/common.php';
mylink();
include '../service/product_services.php';
$id=$_GET['id'];
$u_id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$imgname=$_POST['imgname'];
$fileName=$_FILES['imgname']['name'];
$tempName=$_FILES['imgname']['temp_name'];
// echo "<script>alert('$imgname')</script>";
$existing_image = $_POST['existing_image'];
$dup_image = $_POST['dup_image'];

$brand=$_POST['brand'];
$model=$_POST['model'];
$header=$_POST['header'];
$processor=$_POST['processor'];
$gen=$_POST['gen'];
$clock_speed=$_POST['clock_speed'];
$cache=$_POST['cache'];
$d_type=$_POST['d_type'];
$d_size=$_POST['d_size'];
$d_res=$_POST['d_res'];
$touch=$_POST['touch'];
$r_type=$_POST['r_type'];
$ram=$_POST['ram'];
$storage=$_POST['storage'];
$g_chipset=$_POST['g_chipset'];
$g_memory=$_POST['g_memory'];
$networking=$_POST['networking'];
$d_port=$_POST['d_port'];
$a_port=$_POST['a_port'];
$u_port=$_POST['u_port'];
$battery=$_POST['battery'];
$weight=$_POST['weight'];
$color=$_POST['color'];
$os=$_POST['os'];
$others=$_POST['others'];
$part_no=$_POST['part_no'];
$origin=$_POST['origin'];
$assemble=$_POST['assemble'];
$warranty=$_POST['warranty'];
$upcoming=$_POST['upcoming'];
$gifts=$_POST['gifts'];
$r_price=$_POST['r_price'];
$s_price=$_POST['s_price'];
$d_price=$_POST['d_price'];
$quantity=$_POST['quantity'];
$status=$_POST['status'];
$date=date("Y-m-d h:i:sa");

if(isset($_POST['add']))
{
    products_add($u_id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$imgname);
    echo "<script>document.location='homepageseller.php';</script>";
}
if(isset($_POST['update']))
{
    //  echo "hello ".$date." ".$status." ".$d_price;
    products_update($id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$imgname,$existing_image);
    echo "<script>document.location='homepageseller.php';</script>";
}
if(isset($_POST['duplicate']))
{
    // echo "<script>alert('$id')</script>"
    // products_duplicate($u_id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$date);
    echo "<script>document.location='duplicateproducts.php?id=$id';</script>";
}
if(isset($_POST['ok']))
{
    products_delete($id);
    echo "<script>document.location='homepageseller.php?id=$id';</script>";
}
if(isset($_POST['cancel']))
{
    echo "<script>document.location='editproducts.php?id=$id';</script>";
}

if(isset($_POST['save']))
{
    if(model_validate($model)==true)
    {
        products_duplicate($u_id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$dup_image);
        echo "<script>document.location='homepageseller.php';</script>";
    }
    else
    {
        echo "<script>document.location='duplicateproducts.php?msg=error&id=$id';</script>";
    }
   
}
else
{

}