<?php 
	include "connect.php";
    $select = "select * from wp_sanphamtam";
	$query = mysqli_query($link,$select);
	
	if(isset($_POST["Search"]))
	{
		$keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		if(!empty($keyword))
		{
			$select = "select * from wp_sanphamtam where tensp like '%".$keyword."%'";
        	$query = mysqli_query($link,$select);
        }
        else
		{
			$select = "select * from wp_sanphamtam";
			$query = mysqli_query($link,$select);
		}  
    }
    
    if(isset($_POST["process"]))
	{
        $sql1 = "Truncate table wp_sanpham";
        mysqli_query($link,$sql1);
        $sql2 = "Insert into wp_sanpham(idsp,tensp,hinhanh,chitiet,dongia,gia,madm,ngaydathang,mavach) select idsp,tensp,hinhanh,chitiet,dongia,gia,madm,ngaydathang,mavach from wp_sanphamtam";
        mysqli_query($link,$sql2); 
        header('location:admin.php?Quanly=khohang');
    }
 ?>
<div class="infor">
    <form action="" method="post">
        <br>
        <table width="150" style="margin: auto;">
            <tr>
                
                <td><input type="text" name="keyword"></td>
                <td><input style="color:red; font-size:16px;" type="submit" name="Search" value="Tìm Sách"></td>
            </tr>
            <tr>
                <td colspan=2 style="padding-left:17px;">
                    <?php
        				include'connect.php';
        				$dq = "select * from wp_sanphamtam";
       					$result1 = mysqli_query($link,$dq);
       					$dem = mysqli_num_rows($result1);
						?>
                    <b style="color: blue;font-size:18px;">Số Lượng Sách :</b>
                    <b style="color: red;font-size:20px;"><?php echo $dem ?></b>
                </td>
            </tr>
            <tr><td><input style="color:#009933; font-size:20px;margin-left:60px;margin-top:20px;" type="submit" name="process" value="Cập Nhật Lại "></td></tr>
        </table>
    </form>
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="50px;">IDSP</th>
            <th width="50px;">Tên SP</th>
            <th width="50px;">Mã Vạch</th>
            <th width="50px;">Hình Ảnh</th>
            <th width="200px;">Chi Tiết</th>
            <th width="100px;">Giá Nhập</th>
            <th width="100px;">Giá Bán</th>
            <th width="200px;">Danh mục</th>
            <th width="200px;">Ngày đăng</th>
            <th width="200px;">Active</th>
        </tr>
        <?php
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['idsp'];  ?> </td>
            <td> <?php echo $bien['tensp']; ?></td>
            <td> <?php echo $bien['mavach']; ?></td>
            <td> <img style="max-width: 100px" src="../images/<?php echo $bien['hinhanh']; ?>"></td>
            <td style="height:10px;"> <?php echo $bien['chitiet']; ?></td>
            <td style="color:red;"> <?php echo $bien['dongia']; ?></td>
            <td> <?php echo $bien['gia']; ?></td>
            <td> <?php echo $bien['madm']; ?></td>
            <td> <?php echo $bien['ngaydathang']; ?></td>

            <td>
                <a style="color:#0033FF;" href="admin.php?Quanly=SuaSPtam&id=<?php echo $bien['idsp']; ?>">Sửa</a>
                <a style="color:red;" onclick="return window.confirm('Bạn muốn xóa không');"
                    href="admin.php?Quanly=XoaSP&id=<?php echo $bien['idsp']; ?>">Xóa</a>
            </td>
        </tr>
        <?php 
        }
    ?>
    </table>
</div>