<?php 
	include "connect.php";
	$select = "select * from wp_cthoadon where hoten = '$_GET[hoten]' ";
    $query = mysqli_query($link,$select); ?>
<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr>
            <th width="50px;">Mã HĐ</th>
            <th width="100px;">Ngày Đặt</th>
            <th width="150px;">Tên SP</th>
            <th width="100px;">Giá</th>
            <th width="50px;">Số Lượng</th>
            <th width="100px;">Thành Tiền</th>
            <th width="50px;">ID Người Dùng</th>
            <th width="150px;">Họ Tên</th>
            <th width="100px;"></th>
        </tr>
        <?php
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['macthd'];  ?> </td>
            <td> <?php echo $bien['ngaydat'];  ?> </td>
            <td> <?php echo $bien['tensp']; ?></td>
            <td> <?php echo $bien['gia']; ?></td>
            <td> <?php echo $bien['soluong']; ?></td>
            <td> <?php echo $bien['thanhtien']; ?></td>
            <td> <?php echo $bien['idnd']; ?></td>
            <td> <?php echo $bien['hoten']; ?></td>
            <td><a style="color:green;" href="admin.php?Quanly=XoaCTHD&macthd=<?php echo $bien['macthd']; ?>">Đã Giao
                    Hàng</a></td>
        </tr>
        <?php 
        }
    ?>
    </table>
    <button><a href="admin.php?Quanly=hoadon">Thoát</a></button>
</div>