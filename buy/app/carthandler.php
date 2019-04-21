<?php
include '../data/users_data_access.php';
$quantity=$_GET['str'];
$c_id=$_GET['str1'];
update_quantity($quantity,$c_id);
    // var_dump($quantity);
    echo $c_id;
    echo $quantity;

