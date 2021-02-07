<link rel="stylesheet" href="css/hienthi_sp.css">

<?php 
include'connect.php';
	$idsp=$_GET['idsp'];
	$rows=mysqli_query($link,"select * from wp_sanpham where idsp=$idsp");
	while ($row=mysqli_fetch_array($rows))
	{
?>
<div class="quanlysp">
    <h3>Thông Tin Sản Phẩm</h3>
</div>

<table>

    <tr class='tieude_hienthi_sp'>

        <td>IDSP</td>
        <td>Tên SP</td>
        <td>Hình Ảnh</td>
        <td>Chi Tiết</td>
        <td>Giá</td>
        <td>Active</td>
    </tr>
    <tr class='noidung_hienthi_sp'>
        <td class="masp_hienthi_sp"><?=$row['idsp']?></td>
        <td class="tensp"><?=$row['tensp']?></td>
        <td class="img_hienthi_sp">

            <img src="../images/<?php echo $row['hinhanh'] ?>" width='60' height='60'><br>
            <h4><?php echo $row['tensp'] ?></h4>

        </td>
        <td class="sl_hienthi_sp"><?php echo $row['chitiet'] ?></td>
        <td class="gia_hienthi_sp"><?php echo number_format($row['gia']).' VNÐ' ?></td>
        <td><a href='../ktramua.php'> Mua</a></td>
    </tr>
    <?php 
    }	
?>
</table>