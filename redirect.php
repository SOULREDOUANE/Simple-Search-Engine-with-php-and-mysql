<?php
$url = $_GET['url'];
// $con = mysqli_connect('localhost:3306','root','','search');
$con = mysqli_connect('129.151.253.241','root','password','search');
$sql = mysqli_query($con, "SELECT * FROM data WHERE url='$url'");
$data = mysqli_fetch_array($sql);
$r = $data['ranking'];
$n = $r + 1;
if(mysqli_query($con,"UPDATE data SET ranking='$n' WHERE url='$url'")){
    header('location: '.$url);
}

?>
