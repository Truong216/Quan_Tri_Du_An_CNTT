<?php

		include "connect.php";
		$sql = "DELETE FROM wp_danhmuc WHERE id = '$_GET[id]'";
		mysqli_query($link,$sql);
		header('location:admin.php?Quanly=danhmuc');
?>