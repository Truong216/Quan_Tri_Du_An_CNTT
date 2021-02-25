<?php 
	include "connect.php";
	$select = "select * from wp_menu";
    $query = mysqli_query($link,$select);
 ?>

<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#000033;background-color:#99CCCC;">
            <th width="50px;">id</th>
            <th width="50px;">Tên Menu</th>
            <th width="50px;">Mã URL</th>
            <th width="200px;">Active</th>
        </tr>
        <?php
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['id'];  ?> </td>
            <td> <?php echo $bien['vi_name']; ?></td>
            <td> <?php echo $bien['url'];  ?> </td>


            <td><a style="color:#0033FF;" href="admin.php?Quanly=SuaMN&id=<?php echo $bien['id']; ?>">Sửa</a>
                <a style="color:red;" onclick="return window.confirm('Bạn muốn xóa không');"
                    href="admin.php?Quanly=XoaMN&id=<?php echo $bien['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php 
        }
    ?>
    </table>
    <button><a style="color:green;" href="admin.php?Quanly=ThemMN">Thêm Menu</a></button>
    <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>