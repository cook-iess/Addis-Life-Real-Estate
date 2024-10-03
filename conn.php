<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
$con=mysqli_connect("localhost","addisldi_news","addislife2121");
$db=mysqli_select_db($con, "addisldi_news");
if(!$con){
    echo "connection failed";
    exit();
}
?>