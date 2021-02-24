<?php 
			include "connect.php";
			$select = "select * from wp_binhluan";
   			$query = mysqli_query($link,$select);
 		?>

<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="50px;">STT</th>
            <th width="50px;">Ảnh</th>
            <th width="50px;">Họ Tên</th>
            <th width="200px;">Nội Dung</th>
            <th width="200px;"></th>
        </tr>
        <?php
					while($bien = mysqli_fetch_array($query)){
					# code...
				?>
        <tr>
            <td> <?php echo $bien['stt'];  ?> </td>
            <td> <img style="width: 80px ; height:80px;" src="../images/<?php echo $bien['anhbl']; ?>"></td>
            <td> <?php echo $bien['tenbl']; ?></td>
            <td> <?php echo $bien['noidung']; ?></td>
            <td><a style="color:#0033FF;" href="admin.php?Quanly=ThemBL&stt=<?php echo $bien['stt']; ?>">Trả Lời</a>
                <a style="color:red;" onclick="return window.confirm('Bạn muốn xóa không ?');"
                    href="admin.php?Quanly=XoaBL&stt=<?php echo $bien['stt']; ?>">Xóa</a>
            </td>
        </tr>
        <?php 
       			 }
    			?>
    </table>
    <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>