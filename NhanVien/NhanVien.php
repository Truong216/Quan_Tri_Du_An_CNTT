<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân Viên</title>
    <link rel="stylesheet" href="../css/KỹNăngSống2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
include	'../connect.php';
session_start();

if(!isset($_SESSION['user']) or ($_SESSION['phanquyen']==0))
{
?>

    <form action="../dangnhap/dn.php" method="post">
        <span>
            <p>Username: <input type="text" name="username"></p> <br>
            <p>Password: <input type="password" name="password"></p> <br>
        </span>
        <input name="login" type="submit" value="Đăng Nhập" /><br>
    </form>
    <?php
}
?>
<?php
        include	'connect.php';
        $username = $_SESSION['user'];
        $ngay=date("Y").":".date("m").":".date("d");              
        $soluonggio = "select count(*) as df from wp_chamcong where ngaylam = '$ngay' and tendangnhap = '$username'";
        $poi = mysqli_query($link,$soluonggio);
        while($record = $poi->fetch_array())
            { $tong = $record['df']; }
    ?>
    <div class="khung1">
        <ul class="khung11">
            <li>
                <a href="../index.php">
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
                <input style="width:90px;background-color: red;color:white;boder-color:red;font-size:14px;" type="submit"
                    name="Chamcong" value="Chấm Công">
            </form>
        </div>

        <div class="Image1">
            <?php
        include "../connect.php";
            $username = $_SESSION['user'];
	        $sql = "select * from wp_dangnhap where user='$username'";
		    $result = mysqli_query($link,$sql);
		    $row = mysqli_fetch_array($result);?>

            <a href=""><img src="../images/<?php echo $row['hinhanh']; ?>"
                    style="width: 60px; height:60px;"></a>
        </div>
        <div class="khung12">
            <a href="">Chào Bạn <?= $_SESSION['user']?><a href="../dangnhap/logout.php"> | Thoát</a></a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="clearfix"></div>
    <div class="khung121">
    <div class="khung2" style="height:60px;">
            <h1 style="text-align:center;color:white;">Nhân Viên <a href="" style="color:red;"><?= $_SESSION['user']?> <a href="GioHang.php"><img width="50" height="50"
                        src="https://cdn.pixabay.com/photo/2015/10/22/16/42/icon-1001596_960_720.png" alt=""></a></a></h1>
                
        </div>
    </div>
    <?php 
	include "../connect.php";
	$select = "select * from wp_sanpham";
	$query = mysqli_query($link,$select);
 ?>
    <div class="clefix"></div>
    <div class="ABC">
        <table style="padding-left:340px;">
            <tr>
                <td>
                    <i class="fa fa-align-left"></i>
                    <span><a href="NhanVien.php" style="font-size: 20px; "><b>Danh Mục Sách</b></a></span>
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
                    <a href="NhanVien.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?><span
                            style="padding-left: 5px;"><img width="20" height="15"
                                src="https://cdn1.iconfinder.com/data/icons/interface-59/24/arrow-righ-forward-next-action-chevron-3-512.png"></span></a>
                    <br>
                    <?php } ?>

                    <?php 
                    // $sql = "SELECT * FROM wp_sanpham  WHERE madm='{$_GET['madm']}'";
							include '../connect.php';
							if(isset($_GET['madm'])) {
								$sql = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh  WHERE idsp = kh.id and kh.soluongmua > 0 and madm='{$_GET['madm']}'";	
                                $query=mysqli_query($link,$sql);

                            if(isset($_POST["Search"]))
	                        {
		                        $keyword = mysqli_escape_string($link,$_POST["keyword"] ? $_POST["keyword"] : '');
		                        if(!empty($keyword))
		                        {
			                        $select = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh where idsp = kh.id and kh.soluongmua > 0 and sp.mavach ='".$keyword."'";                 
        	                        $query = mysqli_query($link,$select);
                                }
                                else
		                        {
                                    $select = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh where idsp = kh.id and kh.soluongmua > 0 ";
			                        $query = mysqli_query($link,$select);
		                        }  
                            }
                           
                            if(isset($_POST["Chamcong"]))
	                        {         
                                if($tong >= 1)
                                {
                                    echo "
                                    <script language='javascript'>
                                            alert('Bạn Đã Chấm Công Không Thể Chấm Lại !');
                                            window.open('','_self',3);
                                    </script>
                                    ";
                                }  
                                else
                                {
                                    $insert1="INSERT INTO wp_chamcong(tendangnhap,denlam,ngaylam) VALUES ('$username','1','$ngay')";
                                    $query1=mysqli_query($link,$insert1); 
                                    echo "
                                    <script language='javascript'>
                                            alert('Chấm Công Thành Công !');
                                            window.open('','_self',3);
                                    </script>
                                    ";
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
                    <a href="../chitietspmua/chitietspmua.php?idsp=<?php echo $row['idsp'];?>">
                        <img width="150px" height="200px" src="../images/<?php echo $row['hinhanh'];?> " alt=" "
                            class="img-responsive" />
                    </a><br><br>

                    <b style="color:black;"><a
                            href="NhanVien.php?idsp=<?php echo $row['idsp'];?>"></a><?php echo  $row['tensp'];?><br>
                        <b style="color:red;"><?php echo number_format($row['gia']).' VNÐ'?></b> <br><br>
                    </b><a href="ThemGioHang.php?idsp=<?php echo $row['idsp']; ?>"><input
                                    style="color:white;background-color:#009933;border-color:#009933;font-size:15px;margin-left:30px;" type="submit"
                                    value="Thêm Giỏ"></a>
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
                include '../footer.php';
             ?>

    </div>
</body>

</html>