<?php
$con=mysqli_connect("localhost","root","","buy&get") or die('Error');
//$sql="SELECT area FROM dhaka";
$sql="SELECT * FROM laptops WHERE header LIKE '".$_GET['str']."%'";
$result=mysqli_query($con,$sql);
$arr=array();
$i=0;
while($row=mysqli_fetch_array($result)){
    $arr[$i]=$row['id'];
    $i++;
}

echo json_encode($arr);