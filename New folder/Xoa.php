<?php
		include "connect.php";
        $sql = "DELETE FROM wp_giohangnhanvien WHERE id ='$_GET[id]'";
        mysqli_query($link,$sql);
        header('location:GioHang.php');
?>