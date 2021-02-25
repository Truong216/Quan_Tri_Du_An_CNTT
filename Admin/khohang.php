<?php 
	include "connect.php";
	$select = "select * from wp_khohang";
	$query = mysqli_query($link,$select);
	
	if(isset($_POST["Search"]))
	{
		$keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		if(!empty($keyword))
		{
			$select = "select * from wp_khohang where tensp like '%".$keyword."%'";
        	$query = mysqli_query($link,$select);
		}else
		{
			$select = "select * from wp_khohang";
			$query = mysqli_query($link,$select);
		}  
    }

    if(isset($_POST["Sapxep"]))
	{
		$select = "SELECT * FROM wp_khohang ORDER by soluongmua ASC";
        $query = mysqli_query($link,$select);
    }

 ?>
<div class="infor">
    <form action="" method="post">
        <br>
        <table width="150" style="margin: auto;">
            <tr>
                <td><input style="width:190px;margin-left:45px;" type="text" name="keyword"></td>
       
                <td><input style="color:red; font-size:16px;" type="submit" name="Search" value="Tìm Sách"></td>
                <td><input style="color:red; font-size:16px;" type="submit" name="Sapxep" value="Số Lượng ^"></td>
            </tr>
            <tr> 
                <td>
                <button style="width:190px;height:30px;"><a style="color:green;" href="admin.php?Quanly=SanPhamTam">Cập Nhật Sản Phẩm</a></button></td>
                <td><button style="width:100px;height:30px;"><a style="color:green;" href="admin.php?Quanly=NhapMoi">Nhập Mới</a></button></td>
            </tr>
        </table>
    </form>
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="50px;">ID</th>
            <th width="50px;">Tên SP</th>
            <th width="50px;">Mã Vạch</th>
            <th width="50px;">Hình Ảnh</th>
            <th width="100px;">Giá</th>
            <th width="200px;">Số Lượng Tồn </th>
            <th width="200px;">Thành Tiền</th>
            <th width="200px;">Active</th>
        </tr>
        <?php
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['id'];  ?> </td>
            <td> <?php echo $bien['tensp']; ?></td>
            <td> <?php echo $bien['mavach']; ?></td>
            <td> <img style="max-width: 100px" src="../images/<?php echo $bien['hinhanh']; ?>"></td>
            <td style="height:10px;"> <?php echo $bien['dongia']; ?></td>
            <td> <?php echo $bien['soluongmua']; ?></td>
            <td> <?php echo $bien['thanhtien']; ?></td>
            <td><a style="color:#0033FF;" href="admin.php?Quanly=Nhapthem&idsp=<?php echo $bien['id']; ?>">Nhập Thêm</a>
            </td>
        </tr>
        <?php 
        }
    ?>
    </table>
    <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>