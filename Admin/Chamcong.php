<?php 
	include "connect.php";
	$select = "select * from wp_chamcong";
	$query = mysqli_query($link,$select);
	
	if(isset($_POST["Search"]))
	{
		$keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		if(!empty($keyword))
		{
			$select = "select * from wp_chamcong where ngaylam like '%".$keyword."%'";
        	$query = mysqli_query($link,$select);
		}else
		{
			$select = "select * from wp_chamcong";
			$query = mysqli_query($link,$select);
		}  
    }

    if(isset($_POST["Searchtime"]))
	{
        $tendangnhap = mysqli_escape_string($link,$_POST["tendangnhap"] ? $_POST["tendangnhap"] : '');
        $time1 = mysqli_escape_string($link,$_POST["time1"] ? $_POST["time1"] : '');
        $time2 = mysqli_escape_string($link,$_POST["time2"] ? $_POST["time2"] : '');
        
		if(!empty($time1) and !empty($time2) and !empty($tendangnhap))
		{
			$select = "select * from wp_chamcong where ngaylam between '".$time1."' and '".$time2."' and tendangnhap ='$tendangnhap'";
        	$query = mysqli_query($link,$select);
        }
        else
		{
			$select = "select * from wp_chamcong";
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
                
                <td><input style="color:red; font-size:16px;" type="submit" name="Search" value="Người Làm"></td>
            </tr>
            <tr>
                <td><b style="color:#009900;">Từ Ngày : --------------------------</b> </td>
                <td><b style="color:#009900;">Đến Ngày : -------------------------</b> </td>
                <td><b style="color:#009900;">Tên Nhân Viên : -----------</b> </td>
            </tr>
            <tr>
                <td><input type="datetime-local" name="time1"></td>
                <td><input type="datetime-local" name="time2"></td>
                <td><input type="text" name="tendangnhap"></td>
                <td><input style="color:red; font-size:16px;" type="submit" name="Searchtime" value="Người Làm"></td>
            </tr>
        </table>
    </form>
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="50px;">ID</th>
            <th width="250px;">Tên Đăng Nhập</th>
            <th width="100px;">Đi Làm</th>
            <th width="100px;">Ngày Làm</th>
        </tr>
        <?php
		$total = 0;
		while($bien = mysqli_fetch_array($query)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien['id'];  ?> </td>
            <td> <?php echo $bien['tendangnhap']; ?></td>
            <td> <?php echo $bien['denlam']; ?></td>
            <td style="color:red;"> <?php echo $bien['ngaylam']; ?></td>
            </td>
        </tr>
        <?php
		$total += $bien['denlam']; 
		?>
        <?php 
        }
    ?>
    </table>
    <br>
    <b style="font-size:20px;padding-left:350px;">Số Ngày Công Nhân Viên : <b
            style="color: red;font-size:20px;"><?php echo $total?> Ngày <br>
            <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>