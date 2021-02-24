<?php
	include "connect.php";
	$sql = "select * from wp_danhmuc where id = '$_GET[id]' ";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array($result);

	if(isset($_POST["process"]))
	{
		$madm = mysqli_escape_string($link,$_POST["madm"]);
		$tendm = mysqli_escape_string($link,$_POST["tendm"]);
		$sql = "update wp_danhmuc set tendm = '$tendm',madm = '$madm' where id ='$_GET[id]'";
			mysqli_query($link,$sql);
			header('location:admin.php?Quanly=danhmuc');
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Sửa sản phẩm</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Mã Danh Mục </td>
				<td><input type="text" name="madm" value="<?php echo $row['madm']; ?>"></td>
			</tr>
			<tr>
				<td>Tên Danh Mục </td>
				<td><input type="text" name="tendm" value="<?php echo $row['tendm']; ?>"></td>
			</tr>

				<td></td>
				<td><input type="submit" name="process" value="Sửa" ></td>
		</table>
	</form> 
</div>