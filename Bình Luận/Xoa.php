<?php

		include "connect.php";
		$sql = "DELETE FROM wp_binhluan WHERE stt = '$_GET[stt]'";
		mysqli_query($link,$sql);
		header('location:admin.php?Quanly=binhluan');
?>