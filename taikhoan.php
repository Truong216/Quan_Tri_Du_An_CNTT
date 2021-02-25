<?php 
	include "connect.php";
	$select = "select * from wp_dangnhap where idnd != 0";
    $query = mysqli_query($link,$select);
 ?>

<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#000033;background-color:#99CCCC;">
            <th width="50px;">ID Người Dùng</th>
            <th width="50px;">Hình Ảnh</th>
            <th width="50px;">Tên Người Dùng</th>
            <th width="200px;">Tên Đăng Nhập</th>
            <th width="10px;">Mật Khẩu</th>
            <th width="200px;">Giới Tính</th>
            <th width="200px;">Email</th>
            <th width="200px;">Điện Thoại</th>
            <th width="200px;">Địa Chỉ</th>
            <th width="200px;">Ngày ĐK</th>
        </tr>
        <?php
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['idnd'];  ?> </td>
            <td> <?php echo $bien['tennd']; ?></td>
            <td> <img style="width: 80px; height:80px;" src="../images/<?php echo $bien['hinhanh']; ?>"></td>
            <td style="height:10px;"> <?php echo $bien['user']; ?></td>
            <td> <?php echo $bien['pass']; ?></td>
            <td> <?php echo $bien['gioitinh']; ?></td>
            <td> <?php echo $bien['email']; ?></td>
            <td> <?php echo $bien['dienthoai']; ?></td>
            <td> <?php echo $bien['diachi']; ?></td>
            <td> <?php echo $bien['ngaydk']; ?></td>
        </tr>
        <?php 
        }
    ?>
    </table>
    <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>