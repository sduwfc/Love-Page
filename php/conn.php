<?php
$conn = new mysqli("localhost","root","root","love");
if($conn->connect_error){
    die("数据连接失败");
}
?>