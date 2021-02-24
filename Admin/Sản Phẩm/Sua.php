<?php
	include "connect.php";
	$sql = "select * from wp_sanpham where idsp = '$_GET[idsp]' ";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array($result);

	if(isset($_POST["process"]))
	{
		$tensp = mysqli_escape_string($link,$_POST["tensp"]);
		$chitiet = mysqli_escape_string($link,$_POST["chitiet"]);
		$gia = mysqli_escape_string($link,$_POST["gia"]);
		$madm = mysqli_escape_string($link,$_POST["madm"]);
		$ngaydathang = mysqli_escape_string($link,$_POST["ngaydathang"]);
		$hinhanh = $_FILES['c_img']['name'];
		$mavach = mysqli_escape_string($link,$_POST["mavach"]);
		if($hinhanh != null)
		{
			$path = "../images/";
			$tmp_name = $_FILES['c_img']['tmp_name'];
			$hinhanh = $_FILES['c_img']['name'];
			move_uploaded_file($tmp_name,$path.$hinhanh);
					$sql = "update wp_sanpham set hinhanh = '$hinhanh' where idsp ='$_GET[idsp]'";
					mysqli_query($link,$sql);

					// $sql1 = "update wp_khohang set hinhanh = '$hinhanh' where idsp ='$_GET[idsp]'";
					// mysqli_query($link,$sql1);
					header('location:admin.php');
		}

		$sql = "update wp_sanpham set tensp = '$tensp',chitiet = '$chitiet',gia = '$gia',madm = '$madm',ngaydathang = '$ngaydathang',mavach = '$mavach' where idsp= '$_GET[idsp]'";
			mysqli_query($link,$sql);
		
		// $sql1 = "update wp_khohang set tensp = '$tensp' where idsp ='$_GET[idsp]'";
		// 	mysqli_query($link,$sql1);
			header('location:admin.php?Quanly=sanpham');
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Sửa sản phẩm</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Ảnh</td>
				<td><input type="file" name="c_img"></td>
				<td><img src="../images/<?php echo $row['hinhanh']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>Tên Sản Phẩm </td>
				<td><input type="text" name="tensp" value="<?php echo $row['tensp']; ?>"></td>
			</tr>
			<tr>
				<td>Mã Vạch</td>
				<td><input type="text" name="mavach" value="<?php echo $row['mavach']; ?>"></td>
			</tr>
			<tr>
				<td>Chi Tiết</td>
				<td><input type="text" name="chitiet" value="<?php echo $row['chitiet']; ?>"></td>
			</tr>
			<tr>
				<td>Ngày Đăng</td>
				<td><input type="date" name="ngaydathang" value="<?php echo $row['ngaydathang']; ?>"></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="gia" value="<?php echo $row['gia']; ?>"></td>
			</tr>
			<tr>
				<td>Danh Mục</td>
				<td><input type="text" name="madm" value="<?php echo $row['madm']; ?>"></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Sửa" ></td>
			</tr>
		</table>
	</form> 
</div>