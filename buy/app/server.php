<?php
include '../data/users_data_access.php';
include_once '../data/products_data_access.php';

include_once '../data/user_feedback.php';
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$p_id=$_GET['id'];
$f_id=$_GET['id'];
if(isset($_POST['feedbacksubmit']))
{
    feedback($name,$email,$comment);
}
else if(isset($_POST['delete_laptop']))
{
    products_delete($p_id);
    echo "<script>document.location='alllaptops.php';</script>";
}
else if(isset($_POST['delete_feedback']))
{
    feedback_delete($f_id);
    echo "<script>document.location='allfeedback.php';</script>";
}
else
{
    echo "<script>document.location='index.php';</script>";
}
