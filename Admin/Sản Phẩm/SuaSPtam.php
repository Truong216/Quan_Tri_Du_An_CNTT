<?php
	include "connect.php";
	$sql = "select * from wp_sanphamtam where idsp = '$_GET[id]' ";
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
		//up ảnh sản phẩm 
		$hinhanh2 = $_FILES['c_img2']['name'];
		$hinhanh3 = $_FILES['c_img3']['name'];
		$hinhanh4 = $_FILES['c_img4']['name'];
		$hinhanh5 = $_FILES['c_img5']['name'];	
		if($hinhanh != null)
		{
			$path = "../images/";
			$tmp_name = $_FILES['c_img']['tmp_name'];
			$hinhanh = $_FILES['c_img']['name'];
			//up ảnh sản phẩm 
			$tmp_name2 = $_FILES['c_img2']['tmp_name'];
			$hinhanh2 = $_FILES['c_img2']['name'];
			$tmp_name3 = $_FILES['c_img3']['tmp_name'];
			$hinhanh3 = $_FILES['c_img3']['name'];
			$tmp_name4 = $_FILES['c_img4']['tmp_name'];
			$hinhanh4 = $_FILES['c_img4']['name'];
			$tmp_name5 = $_FILES['c_img5']['tmp_name'];
			$hinhanh5 = $_FILES['c_img5']['name'];
			move_uploaded_file($tmp_name,$path.$hinhanh);
			//up ảnh sản phẩm 
			move_uploaded_file($tmp_name2,$path.$hinhanh2);
			move_uploaded_file($tmp_name3,$path.$hinhanh3);
			move_uploaded_file($tmp_name4,$path.$hinhanh4);
			move_uploaded_file($tmp_name5,$path.$hinhanh5);
			//
					$sql = "update wp_sanphamtam set hinhanh = '$hinhanh' where idsp ='$_GET[id]'";
					mysqli_query($link,$sql);
			//up ảnh sản phẩm 
					$sql1 = "update wp_anhsp set anh2 = '$hinhanh2',anh3 = '$hinhanh3',anh4 = '$hinhanh4',anh5 = '$hinhanh5' where id ='$_GET[id]'";
					mysqli_query($link,$sql1);

					// $sql1 = "update wp_khohang set hinhanh = '$hinhanh' where idsp ='$_GET[idsp]'";
					// mysqli_query($link,$sql1);
					header('location:admin.php');
		}

		$sql = "update wp_sanphamtam set tensp = '$tensp',chitiet = '$chitiet',gia = '$gia',madm = '$madm',ngaydathang = '$ngaydathang' where idsp= '$_GET[id]'";
			mysqli_query($link,$sql);
		
		// $sql1 = "update wp_khohang set tensp = '$tensp' where idsp ='$_GET[idsp]'";
		// 	mysqli_query($link,$sql1);
			header('location:admin.php?Quanly=SanPhamTam');
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Cập Nhật Số Liệu Sản Phẩm Sau Khi Mua</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Ảnh</td>
				<td><input type="file" name="c_img">
				<input type="file" name="c_img2">
				<input type="file" name="c_img3">
				<input type="file" name="c_img4">
				<input type="file" name="c_img5"></td>
				<td><img src="../images/<?php echo $row['hinhanh']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>Tên Sản Phẩm </td>
				<td><input type="text" name="tensp" value="<?php echo $row['tensp']; ?>"></td>
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
				<td>Giá Nhập</td>
				<td><input type="text" name="gia" value="<?php echo $row['dongia']; ?>"></td>
			</tr>
			<tr>
				<td>Giá Bán</td>
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