<?php 
	include "connect.php";
	$select = "select * from bangtk";
    $query = mysqli_query($link,$select);
    $select1 = "select * from wp_chamcong";
	$query1 = mysqli_query($link,$select1);
	
    if(isset($_POST["Searchtime"]))
	{
        $time1 = mysqli_escape_string($link,$_POST["time1"] ? $_POST["time1"] : '');
        $time2 = mysqli_escape_string($link,$_POST["time2"] ? $_POST["time2"] : '');
		if(!empty($time1) and !empty($time2))
		{
			$select = "select * from bangtk where ngay between '".$time1."' and '".$time2."'";
            $query = mysqli_query($link,$select);
            
            $select1 = "select * from wp_chamcong where ngaylam between '".$time1."' and '".$time2."'";
        	$query1 = mysqli_query($link,$select1);
		}else
		{
			$select = "select * from bangtk";
            $query = mysqli_query($link,$select);
            
            $select1 = "select * from wp_chamcong";
        	$query1 = mysqli_query($link,$select1);
		}  
    }
    

 ?>
<div class="infor">
    <form action="" method="post">
        <br>
        <table width="150" style="margin: auto;">
            <tr>
                <td><input type="radio" name="muc1" value="12000">12,000 VND</td>
                <td><input type="radio" name="muc2" value="15000">15,000 VND</td>
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
    <b style="font-size:20px;padding-left:350px;">Lợi Nhuận Kiếm Được : <b 
            style="color: red;font-size:20px;"><?php echo number_format($total).' VNÐ'?></b> </b><br>
</div>
<br>
<div class="infor">
    <table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;">
        <tr style="color:#003333;background-color:#99CCCC;">
            <th width="100px;">Ngày Làm</th>
            <th width="150px;">id</th>
            <th width="150px;">Tên Nhân Viên</th>
            <th width="150px;">Đi Làm</th> 
        </tr>
        <?php
		$ad = 0;
		while($bien1 = mysqli_fetch_array($query1)){
			# code...
	?>
        <tr>
            <td> <?php echo $bien1['ngaylam']; ?></td>
            <td> <?php echo $bien1['id'];  ?> </td>
            <td> <?php echo $bien1['tendangnhap'];  ?> </td>
            <td> <?php echo $bien1['denlam']; ?></td>
            
            </td>
        </tr>
        <?php
		$ad += $bien1['denlam']; 
		?>
        <?php 
        }
    ?>
    </table>
    <b style="font-size:20px;padding-left:400px;">Số Ngày Công : <b
            style="color: red;font-size:20px;"><?php echo $ad?> Ngày</b> <br> <br> 

        <?php
            if(isset($_POST["muc1"]) == '12000')
            {    
                echo "
                    <script language='javascript'>
                        alert('Mức Lương 12,000 VNĐ !');
                        window.open('','_self',3);
                    </script>
                     ";	
                $tong =$total - $ad*12000 ;
            }
            else if(isset($_POST["muc2"]) == '15000')
            {
                echo "
                    <script language='javascript'>
                        alert('Mức Lương 15,000 VNĐ !');
                        window.open('','_self',3);
                    </script>
                     ";	
                $tong =$total - $ad*15000 ;
            }
            else
            {
                echo "
                    <script language='javascript'>
                        alert('Yêu Cầu Nhập Mức Lương Cho Nhân Viên !');
                        window.open('','_self',3);
                    </script>
                     ";	
                $tong = 0 ;
            }
        ?>

    <b style="font-size:25px;padding-left:300px;">Lãi Ròng Nhà Sách MâyBook : <b
            style="color: blue;font-size:25px;"><?php echo number_format($tong).' VNÐ'?></b> <br> <br> 
            <button><a style="color:red;" href="admin.php">Thoát</a></button>
</div>