<?php
		include "connect.php";
        $sql = "DELETE FROM wp_giohang WHERE id ='$_GET[id]'";
        mysqli_query($link,$sql);
        header('location:GioHang.php');
?>