<?php
	include "connect.php";
	$sql = "select * from wp_khohang where id = '$_GET[idsp]' ";
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_array($result);

	if(isset($_POST["process"]))
	{
        $soluongmua = mysqli_escape_string($link,$_POST["soluongmua"]);
		$soluongthem = mysqli_escape_string($link,$_POST["soluongthem"]);
        $dongia = mysqli_escape_string($link,$_POST["dongia"]);

        $soluongmua=$soluongmua+$soluongthem;
        $thanhtien = $soluongmua*$dongia;
		$sql = "update wp_khohang set soluongmua = '$soluongmua',thanhtien='$thanhtien' where id= '$_GET[idsp]'";
			mysqli_query($link,$sql);
            header('location:admin.php?Quanly=khohang');
    }
?>
<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Nhập Hàng</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Ảnh</td>
				<td><img src="../images/<?php echo $row['hinhanh']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>Tên Sản Phẩm </td>
				<td><input type="text" name="tensp" value="<?php echo $row['tensp']; ?>"></td>
			</tr>
			<tr>
				<td>Giá nhập</td>
				<td><input type="text" name="dongia" value="<?php echo $row['dongia']; ?>"></td>
			</tr>
			<tr>
				<td>Số lượng hiện tại</td>
				<td><input type="text" name="soluongmua" value="<?php echo $row['soluongmua']; ?>"></td>
			</tr>
			<tr>
				<td>Thành tiền</td>
				<td><input type="text" name="thanhtien" value="<?php echo $row['thanhtien']; ?>"></td>
			</tr>

				<tr>
				<td><b style="color:blue">Số lượng thêm : <b><input style="width:80px" type="text" name="soluongthem" value="0"></td>
				<td><input style="color:red;" type="submit" name="process" value="Nhập Thêm" >
                </td>
			</tr>
		</table>
	</form> 
</div>