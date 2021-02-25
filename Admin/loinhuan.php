<?php 
	include "connect.php";
	$select = "select * from bangtk";
	$query = mysqli_query($link,$select);
	
	if(isset($_POST["Search"]))
	{
		$keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		if(!empty($keyword))
		{
			$select = "select * from bangtk where ngay like '%".$keyword."%'";
        	$query = mysqli_query($link,$select);
		}else
		{
			$select = "select * from bangtk";
			$query = mysqli_query($link,$select);
		}  
    }

    if(isset($_POST["Searchtime"]))
	{
        $time1 = mysqli_escape_string($link,$_POST["time1"] ? $_POST["time1"] : '');
        $time2 = mysqli_escape_string($link,$_POST["time2"] ? $_POST["time2"] : '');
		if(!empty($time1) and !empty($time2))
		{
			$select = "select * from bangtk where ngay between '".$time1."' and '".$time2."'";
        	$query = mysqli_query($link,$select);
		}else
		{
			$select = "select * from bangtk";
			$query = mysqli_query($link,$select);
		}  
    }
    

 ?>
<div class="infor">
    <form action="" method="post">
        <br>
        <table width="150" style="margin: auto;">
            <tr>
                <td> <b style="color:red;">Nhập ngày : -----------------------</b> </td>
                <td><input style="width:210px;" type="text" name="keyword"></td>
                
                <td><input style="color:red; font-size:16px;" type="submit" name="Search" value="Lợi Nhuận"></td>
            </tr>
            <tr>
                <td><b style="color:#009900;">Từ Ngày : --------------------------</b> </td>
                <td><b style="color:#009900;">Đến Ngày : -------------------------</b> </td>
            </tr>
            <tr>
                <td><input type="datetime-local" name="time1"></td>
                <td><input type="datetime-local" name="time2"></td>
                <td><input style="color:red; font-size:16px;" type="submit" name="Searchtime" value="Lợi Nhuận"></td>
            </tr>
        </table>
    </form>
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="150px;">Ngày Bán</th>
            <th width="50px;">IDSP</th>
            <th width="250px;">Tên SP</th>
            <th width="100px;">Giá Bán</th>
            <th width="100px;">Giá Mua</th>
            <th width="100px;">Chênh Lệch Bán Mua</th>
            <th width="100px;">Số Lượng</th>
            <th width="100px;">Lợi Nhuận Thu Được</th>
        </tr>
        <?php
		$total = 0;
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['ngay'];  ?> </td>
            <td> <?php echo $bien['idsp'];  ?> </td>
            <td> <?php echo $bien['tensp']; ?></td>
            <td style="height:10px;"> <?php echo $bien['gia']; ?></td>
            <td style="height:10px;"> <?php echo $bien['dongia']; ?></td>
            <td> <?php echo $bien['chenhlech']; ?></td>
            <td> <?php echo $bien['soluong']; ?></td>
            <td style="color:red;"> <?php echo $bien['Loinhuan']; ?></td>
            </td>
        </tr>
        <?php
		$total += $bien['Loinhuan']; 
		?>
        <?php 
        }
    ?>
    </table>
    <br>
    <b style="font-size:20px;padding-left:350px;">Lợi Nhuận Kiếm Được : <b
            style="color: red;font-size:20px;"><?php echo $total?>VNĐ <br>
            <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>