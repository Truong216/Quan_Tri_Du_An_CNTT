<?php

		include "connect.php";
		$sql = "DELETE FROM wp_sanpham WHERE idsp = '$_GET[id]'";
		$sql1 = "DELETE FROM wp_sanphamtam WHERE idsp = '$_GET[id]'";
		$sql2 = "DELETE FROM wp_khohang WHERE id = '$_GET[id]'";
		mysqli_query($link,$sql);
		mysqli_query($link,$sql1);
		mysqli_query($link,$sql2);
		header('location:admin.php?Quanly=sanpham');
?>