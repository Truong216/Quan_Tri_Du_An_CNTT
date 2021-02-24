<?php
	include "connect.php";

	if(isset($_POST["process"]))
	{
		$noidung = mysqli_escape_string($link,$_POST["noidung"]);

		$sql = "insert into wp_binhluan(anhbl,tenbl,noidung) values('anhbl5.jpg','admin','$noidung')";
			mysqli_query($link,$sql);
			header('location:admin.php?Quanly=binhluan');
	}
?>
<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Trả Lời</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Ảnh</td>
				<td><img width="50px;" height="50px;" src="../images/anhbl5.jpg" alt=""></td>
			</tr>
			<tr>
				<td>Tên</td>
				<td>Admin</td>
			</tr>
			<tr>
				<td>Nội Dung</td>
				<?php 
					include "connect.php";
					$select = "select * from wp_binhluan where stt ='$_GET[stt]'";
					$query = mysqli_query($link,$select);
					while($bien = mysqli_fetch_array($query)){
 				?>
				<td><input style="color:blue;" type="text" name="noidung" value="<?php echo $bien['tenbl']; ?>"></td>
					<?php }?>
			</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Trả Lời" ></td>
			</tr>
		</table>
	</form> 
</div>