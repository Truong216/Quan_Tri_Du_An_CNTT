<?php
	include "connect.php";

	if(isset($_POST["process"]))
	{
		$tensp = mysqli_escape_string($link,$_POST["tensp"]);
		$gia = mysqli_escape_string($link,$_POST["gia"]);
		$soluong = mysqli_escape_string($link,$_POST["soluong"]);
		$ngaycapnhat = mysqli_escape_string($link,$_POST["ngaycapnhat"]);
		$anh = $_FILES['c_img']['name'];
		$mavach = mysqli_escape_string($link,$_POST["mavach"]);
		if($anh != null)
		{
			$path = "../images/";
			$tmp_name = $_FILES['c_img']['tmp_name'];
			$anh = $_FILES['c_img']['name'];
			move_uploaded_file($tmp_name,$path.$anh);
		$sql = "insert into wp_sanphamtam(tensp,hinhanh,dongia,ngaydathang,mavach) values('$tensp','$anh','$gia','$ngaycapnhat','$mavach')";
			mysqli_query($link,$sql);
		$sql1 = "insert into wp_khohang(tensp,dongia,soluongmua,thanhtien,ngaynhapmoi,hinhanh,mavach) values('$tensp','$gia','$soluong','0','$ngaycapnhat','$anh','$mavach')";
			mysqli_query($link,$sql1);
		$sql2 = "insert into wp_anhsp(anh1) values('$anh')";
			mysqli_query($link,$sql2);
		}
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Nhập mới sản phẩm</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
		<tr>
				<td>Tên Sản Phẩm </td>
				<td><input type="text" name="tensp" ></td>
			</tr>

			<tr>
				<td>Mã Vạch</td>
				<td><input type="text" name="mavach" ></td>
			</tr>
			<tr>
				<td>Ảnh</td>
				<td><input type="file" name="c_img" ></td>
			</tr>
			
			<tr>
				<td>Giá</td>
				<td><input type="text" name="gia" ></td>
			</tr>
			<tr>
				<td>Số Lượng</td>
				<td><input type="text" name="soluong" ></td>
			</tr>
			<tr>
				<td>Ngày Cập Nhật</td>
				<td><input type="date" name="ngaycapnhat" ></td>
			</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Nhập sản phẩm">
				</td>
			</tr>
		</table>
	</form> 
</div>