<?php
include '../data/users_data_access.php';
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
if(isset($_POST['feedbacksubmit']))
{
    feedback($name,$email,$comment);
}
?>