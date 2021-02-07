<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kỹ Năng Sống 2</title>
    <link rel="stylesheet" href="css/KỹNăngSống2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
include	'connect.php';
session_start();

if(!isset($_SESSION['user']) or ($_SESSION['phanquyen']==0))
{
?>

    <form action="dangnhap/dn.php" method="post">
        <span>
            <p>Username: <input type="text" name="username"></p> <br>
            <p>Password: <input type="password" name="password"></p> <br>
        </span>
        <input name="login" type="submit" value="Đăng Nhập" /><br>
    </form>
    <?php
}
?>
    <div class="khung1">
        <ul class="khung11">
            <li>
                <a href="index.php">
                    <h1 style="color: #006633">mây<h1 style="color: #FF0000">book<h1 style="color: #006633">.com</h1>
                        </h1>
                    </h1>
                </a>
            </li>
        </ul>
        <div class="form1">
            <form action="" method="post">
                <input style="width:450px" type="text" name="keyword" placeholder="  Tìm kiếm tựa sách,tác giả">
                <input style="width:80px;background-color: #009933;color:white;boder-color:white;" type="submit"
                    name="Search" value="Tìm sách">
            </form>
        </div>

        <div class="Image1">
            <?php
        include "connect.php";
            $username = $_SESSION['user'];
	        $sql = "select * from wp_dangnhap where user='$username'";
		    $result = mysqli_query($link,$sql);
		    $row = mysqli_fetch_array($result);?>
            <a href="taikhoan/TàiKhoản.php"><img src="images/<?php echo $row['hinhanh']; ?>"
                    style="width: 60px; height:60px;"></a>
        </div>
        <div class="khung12">
            <a href="">Chào Bạn <?= $_SESSION['user']?><a href="dangnhap/logout.php"> | Thoát</a></a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="clearfix"></div>
    <div class="khung121">
        <div class="khung2">
            <ul>
                <li><a href="Dadangnhap.php">
                        <p><strong>TRANG CHỦ</strong></p>
                    </a></li>
                <li><a href="GiớiThiệu/GiớiThiệu.php">
                        <p><strong>GIỚI THIỆU</strong></p>
                    </a></li>
                <li><a href="TinMới/TinMới.php">
                        <p><strong>TIN MỚI</strong></p>
                    </a></li>
                <li><a href="HướngDẫn/HướngDẫn.php">
                        <p><strong>HƯỚNG DẪN</strong></p>
                    </a></li>
                <li><a href="taikhoan/TàiKhoản.php">
                        <p><strong>TÀI KHOẢN</strong></p>
                    </a></li>
            </ul>
            <ul class="khung22" style="color: white;">
                <li><i class="fa fa-phone"> Hotline: 1234 5678 | </i></li>
                <li><a
                        href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML"><i
                            class="fa fa-comment"></i> Hỗ trợ trực tuyến</a></li>
            </ul>
        </div>
    </div>
    <?php 
	include "connect.php";
	$select = "select * from wp_sanpham";
	$query = mysqli_query($link,$select);
 ?>
    <div class="clefix"></div>
    <div class="ABC">
        <table style="padding-left:340px;">
            <tr>
                <td>
                    <i class="fa fa-align-left"></i>
                    <span><a href="Dadangnhap.php" style="font-size: 20px; "><b>Danh Mục Sách</b></a></span>
                    <span><i class="fa fa-angle-down"></i></span>
                </td>
            </tr>
            <tr>
                <td style="font-size:18px;padding-top:10px;">
                    <?php 
						$sql="select * from wp_danhmuc ";
						$result=mysqli_query($link,$sql);
					?>

                    <?php 
							while($row=mysqli_fetch_array($result))
							{
							?>
                    <a href="Dadangnhap.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?><span
                            style="padding-left: 5px;"><img width="20" height="15"
                                src="https://cdn1.iconfinder.com/data/icons/interface-59/24/arrow-righ-forward-next-action-chevron-3-512.png"></span></a>
                    <br>
                    <?php } ?>

                    <?php 
                    // $sql = "SELECT * FROM wp_sanpham  WHERE madm='{$_GET['madm']}'";
							include 'connect.php';
							if(isset($_GET['madm'])) {
								$sql = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh  WHERE idsp = kh.id and kh.soluongmua > 0 and madm='{$_GET['madm']}'";	
                                $query=mysqli_query($link,$sql);

                            if(isset($_POST["Search"]))
	                        {
		                        $keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		                        if(!empty($keyword))
		                        {
			                        $select = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh where idsp = kh.id and kh.soluongmua > 0 and sp.tensp like '%".$keyword."%' or sp.mavach ='".$keyword."'";                 
        	                        $query = mysqli_query($link,$select);
                                }
                                else
		                        {
                                    $select = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh where idsp = kh.id and kh.soluongmua > 0 ";
			                        $query = mysqli_query($link,$select);
		                        }  
                            }

	?>
                </td>
            </tr>
        </table>
        <div class="khungMS11" style="margin:10px 10px 10px 10px;width:1000px;">

            <table style="margin-bottom: 10px;height:770px;width:980px;">
                <?php 
                $i=0;
                $j=0;
            while($row=mysqli_fetch_array($query))		
			{
            if($i%5==0)
            {
                echo"<tr>";
                $i=$i+1;}$j=$j+1;
            ?>
                <td>
                    <a href="chitietspmua/chitietspmua.php?idsp=<?php echo $row['idsp'];?>">
                        <img width="150px" height="200px" src="images/<?php echo $row['hinhanh'];?> " alt=" "
                            class="img-responsive" />
                    </a><br><br>

                    <b style="color:black;"><a
                            href="chitietspmua/chitietspmua.php?idsp=<?php echo $row['idsp'];?>"></a><?php echo  $row['tensp'];?><br>
                        <b style="color:red;"><?php echo number_format($row['gia']).' VNÐ'?></b> <br><br>
                    </b><a href="chitietspmua/chitietspmua.php?idsp=<?php echo $row['idsp'];?>"><button
                            style="background-color:green;width:50px;height:30px;color:white;border-color:white;"
                            type="submit" name="submit">Mua</button></a>
                </td>
                <?php if($j==5)
            { echo"</tr>"; $i=0;$j=0;
            }?>
                <?php }}?>

            </table>

        </div>
        <div class="clearfix"></div>
    </div>
    </div>


    <br>
    <?php
                include 'footer.php';
             ?>

    </div>
</body>

</html>