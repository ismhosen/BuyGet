 <?php
include '../service/product_services.php';
$name=$_GET['name'];
$p_id=$_GET['p_id'];
$u_id=$_GET['u_id'];
$email=$_GET['email'];
$quantity=$_GET['quantity'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$voucher=$_GET['voucher'];
$comment=$_GET['comment'];
$price=$_GET['price'];
$owner_email=$_GET['owner_email'];

echo order($p_id,$owner_email,$u_id,$price,$quantity,$name,$address,$phone,$email,$comment);
// echo "<script>document.location='index.php';</script>";
