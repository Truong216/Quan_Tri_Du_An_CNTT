<?php
	include "connect.php";

	if(isset($_POST["process"]))
	{
		$tendm = mysqli_escape_string($link,$_POST["tendm"]);
		$madm = mysqli_escape_string($link,$_POST["madm"]);
		$sql = "insert into wp_danhmuc(madm,tendm) values('$madm','$tendm')";
			mysqli_query($link,$sql);
			header('location:admin.php?Quanly=danhmuc');
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm danh mục</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
		<tr>
				<td>Tên Danh Mục </td>
				<td><input type="text" name="tendm" ></td>
			</tr>
			<tr>
				<td>Mã Danh Mục</td>
				<td><input type="text" name="madm" ></td>
			</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Thêm danh mục" ></td>
			</tr>
		</table>
	</form> 
</div>