<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kỹ Năng Sống 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/KỹNăngSống3.css">
    <script type="text/javascript" src="js/KỹNăngSống3.js"></script>
</head>
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
else {
?>
<p> Chào bạn
    <?= $_SESSION['user']?><a href="dangnhap/logout.php"> | Thoát</a></p>
<?php	}?>
<div class="khung1">
    <ul class="khung11">
        <li>
            <a href="../Dadangnhap.php">
                <h1 style="color: #006633">mây<h1 style="color: #FF0000">book<h1 style="color: #006633">.com</h1>
                    </h1>
                </h1>
            </a>
        </li>
    </ul>
    <div class="form1">
        <input type="text" style="height:35px;" placeholder="  Tìm kiếm tựa sách,tác giả">
    </div>
    <div class="form2">
        <input type="button" value="Tìm sách">
    </div>
    <div class="Image1">
        <?php
        include "connect.php";
            $username = $_SESSION['user'];
	        $sql = "select * from wp_dangnhap where user='$username'";
		    $result = mysqli_query($link,$sql);
		    $row = mysqli_fetch_array($result);?>
        <a href="../taikhoan/TàiKhoản.php"><img src="../images/<?php echo $row['hinhanh']; ?>"
                style="width: 60px;height:60px;"></a>
    </div>
    <div class="khung12">
        <a href="">Chào Bạn <?= $_SESSION['user']?><a href="../dangnhap/logout.php"> | Thoát</a></a>
    </div>
</div>
<div class="khung121">
    <div class="khung2">
        <ul>
            <li><a href="../Dadangnhap.php">
                    <p><strong>TRANG CHỦ</strong></p>
                </a></li>
            <li><a href="GiớiThiệu.html">
                    <p><strong>GIỚI THIỆU</strong></p>
                </a></li>
            <li><a href="TinMới.html">
                    <p><strong>TIN MỚI</strong></p>
                </a></li>
            <li><a href="HướngDẫn.html">
                    <p><strong>HƯỚNG DẪN</strong></p>
                </a></li>
            <li><a href="../taikhoan/TàiKhoản.php">
                    <p><strong>TÀI KHOẢN</strong></p>
                </a></li>
                <li><a href="../Donhang/Orderdetail.php">
                        <p><strong>ĐƠN HÀNG</strong></p>
                    </a></li>
            <?php
                include "connect.php";
                $sql = "select count(*) as df from wp_giohang ";
                $abc = mysqli_query($link,$sql);

                while($record = $abc->fetch_array())
                { $tong = $record['df']; } 

                if($tong > 0)
                {
                    echo '<li><a style="color:white;" href="../hoadondathang/GioHang.php"><img width="40" height="40" src="https://cdn.pixabay.com/photo/2015/10/22/16/42/icon-1001596_960_720.png" alt=""></a></li>';     
                }
                else
                {
                    echo '<li><a href=""> <p><strong>Hotline: 123 678 | Hỗ Trợ 24/7</strong></p></a></li>';
                }
                
                ?>
        </ul>

        <ul class="khung22" style="color: white;">
 
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<?php 
    include'connect.php';
	$idsp=$_GET['idsp'];
	$rows=mysqli_query($link,"select * from wp_sanpham where idsp=$idsp");
	while ($row=mysqli_fetch_array($rows))
	{
    ?>
<div class="ABC">
    <div class="khung3">

        <ul>
            <li><a href="../Dadangnhap.php">Danh Mục Sách <img width="15" height="15"
                        src="https://cdn1.iconfinder.com/data/icons/arrow-one/100/ArrowRight01-512.png"></a></li>
            <li><a href="chitietspmua.php"><?=$row['tensp']?></a></li>
        </ul>
    </div>
    <br><br>
    <hr style="margin-left:345px;">
    <div class="khungAnh">
        <div class="khung4">
            <img width="280" height="350" src="../images/<?php echo $row['hinhanh'] ?>" id="dacnhantam">
        </div>
        <ul class="khung411">
            <?php
                include "connect.php";
                $id = $_GET['idsp'];
	            $sql = "select * from wp_anhsp where id='$id'";
		        $result = mysqli_query($link,$sql);
                $abc = mysqli_fetch_array($result);
            ?>

            <li><img width="50px" height="60px" src="../images/<?php echo $abc['anh1'];?>"
                    onmouseover="myFunsion(this);"></li>
            <li><img width="50px" height="60px" src="../images/<?php echo $abc['anh2'];?>"
                    onmouseover="myFunsion(this);"></li>
            <li><img width="50px" height="60px" src="../images/<?php echo $abc['anh3'];?>"
                    onmouseover="myFunsion(this);"></li>
            <li><img width="50px" height="60px" src="../images/<?php echo $abc['anh4'];?>"
                    onmouseover="myFunsion(this);"></li>
            <li><img width="50px" height="60px" src="../images/<?php echo $abc['anh5'];?>"
                    onmouseover="myFunsion(this);"></li>
        </ul><br>
        <div class="khung412">
            <a href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML"><img
                    src="../Ảnh/Anh25.pnj.png"></a>
        </div>
    </div>
</div>

<div class="khung41">
    <h2><?=$row['tensp']?></h2>
    <span>Tác giả :</span>
    <span style="color: #009933;">Dale Carnegie</span> <br>
    <span>Người dịch :</span>
    <span style="color: #009933;">Nguyễn Danh Hà</span> <br>
    <span>Nhà xuất bản :</span>
    <span style="color: #009933;">Nxb Tổng hợp TP.HCM</span> <br>
    <span>Nhà phát hành :</span>
    <span style="color: #009933;">Trí Việt</span> <br>
    <hr>
    Thông tin kèm theo :
    <p style="font-size: 17px;"><img src="../Ảnh/Anh2.pnj.png"> Miễn phí giao hàng toàn quốc cho đơn hàng từ 250.000đơn
        <br>(Áp dụng từ ngày 30/04/2020)
    </p>
    <p style="font-size: 17px;"><img src="../Ảnh/Anh2.pnj.png"> Kiểm tra hàng trước khi thanh toán !</p>
    <form method="post">
        <ul class="khung441">
            <li><i style=" font-size: 30px;color:red;"><?php echo number_format($row['gia']).' VNÐ' ?></i></li>
            <li><a href="../hoadondathang/muahang.php?idsp=<?php echo $row['idsp'];?>"><input style=";margin-left:30px;color:white;background-color:#009933;border-color:#009933;" type="button"
                        value="Mua"></a></li>
            <li> <a href=""><input style="color:white;background-color:#009933;border-color:#009933;font-size:15px;margin-left:30px;" type="submit" name="themgio" value="Thêm Giỏ"></a></li>
        </ul>
    </form>

    <?php 
        if(isset($_POST['themgio']))
        {
            $idsp = $_GET['idsp'];

            $query="SELECT * FROM wp_sanpham WHERE idsp ='$idsp'";
            $result=mysqli_query($link,$query);
            $row = mysqli_fetch_array($result);

            $tensp = $row['tensp'];
            $gia = $row['gia'];

            
            $sql="INSERT INTO wp_giohang(tensp,gia,soluongsp,thanhtien,idsp) VALUES ('$tensp','$gia','1','$gia * 1','$idsp')";
            mysqli_query($link,$sql);

            echo "
            <script language='javascript'>
                    alert('Thêm Giỏ Thành Công !');
                    window.open('','_self',3);
            </script>
            ";
            echo "<meta http-equiv='refresh' content='0'>";//load lại trang
        }
    ?>
    <br>

    <div class="khunXemThem">
        <table style="font-weight: 200; border: 0.5px solid #Dddddd; width: 570px;">
            <tr>
                <td colspan="4"><b style="color:#006633">THƯỜNG ĐƯỢC MUA CÙNG</b></td>
            </tr>

            <tr>
                <td><input style="height: 18px; width: 18px;" type="checkbox" checked></td>
                <td> <img style="height:80px ;width:70px" src="../images/<?php echo $row['hinhanh'] ?>" width='60'
                        height='60'></td>
                <td>Bạn đang xem : <?php echo $row['tensp']?></td>
                <td><?php echo number_format($row['gia']).' VNÐ' ?></td>
            </tr>
            <?php
        				    include'connect.php';
        				    $a = "select * from wp_sanpham ORDER BY abs(10000 - gia) LIMIT 2";
       					    $b = mysqli_query($link,$a);
						?>
            <?php
        $total = 0;
		while($av = mysqli_fetch_array($b)){
			# code...
	    ?>
            <tr>
                <td><input style="height: 22px; width: 18px;" type="checkbox" checked></td>
                <td><img style="height:80px ;width:70px;max-width: 100px" src="../images/<?php echo $av['hinhanh']; ?>">
                </td>
                <td><?php echo $av['tensp']; ?></td>
                <td><?php echo number_format($av['gia']).' VNÐ' ?></td>
            </tr>
            <?php
		$total += $av['gia']; 
		?>
            <?php 
        }
    ?>
            <tr style="text-align: right;">
                <td colspan="4">Tổng tiền:<b style="color: red;"><?php echo number_format($total + $row['gia'])?>VNĐ</b>
                    <br><br>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="khung5">
    <form >
        <table>
            <tr>
                <td colspan="2" style="text-align: center;"><strong style="color: #009933;">Thông tin thanh
                        toán</strong></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">---------------------------------</td>
            </tr>
            <tr>
                <td>Giá bìa</td>
                <td style="text-align: right;"><b><s>98.000đ</s></b></td>
            </tr>
            <tr>
                <td>Giá bán</td>
                <td style="text-align: right;"><strong
                        style="color: red;"><?php echo number_format($row['gia']).' VNÐ' ?></strong></td>
            </tr>
            <tr>
                <td>Tiết kiệm</td>
                <td style="text-align: right;"><b>40.000đ(40%)</b></td>
            </tr>
            <tr>
                <td>Chất lượng sách</td>
                <td style="text-align: right;"><b>Loại A(?)</b></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">---------------------------------</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <h4 style="color: #009933;">CÒN HÀNG</h4>
                </td>

            </tr>
        </table>
    </form>

    <form style="height: 325px;">
        <table style="padding-top: 0px; padding-left: 5px;">
            <tr>
                <td><img width="40" height="30" src="../Ảnh/Anh26.pnj.png"></td>
                <td><b style="color: rgb(37, 37, 223); font-size: 19px;">mây Tranding</b><br>
                    <i style="padding-left: 0px;">Cam kết chính hiệu 100%</i>
                </td>
            </tr>

            <tr style="font-size: 15px;">
                <td><img width="38" height="30" src="../Ảnh/Anh27.pnj.png"></td>
                <td><b style="font-size: 17px;padding-left: 4px;">Hoàn tiền 111%</b><br>
                    <i>Nếu phát hiện hàng giả</i>
                </td>
            </tr>


            <tr>
                <td colspan="2">----------------------------------------</td>
            </tr>
            <tr>
                <td colspan="2">NHÀ CUNG CẤP KHÁC<br></td>
            </tr>
            <tr>
                <td>Tinh Hoa
                    <br><i style="color: red;">58.300</i>
                </td>
                <td style="text-align: right;"><button>Xem</button></td>
            </tr>
            <tr>
                <td>Nhà sách Fahasa
                    <br><i style="color: red;">59.980</i>
                </td>

                <td style="text-align: right;"><button>Xem</button></td>
            </tr>
            <tr>
                <td>Vadata
                    <br><i style="color: red;">59.000</i>
                </td>
                <td style="text-align: right;"><button>Xem</button></td>
            </tr>
        </table>
    </form>
</div>

<div class="clearfix"></div>

<div class="khungtail">
    <div class="khung62">
        <b style="color:#006633;">Sản Phẩm Thường Được Xem Cùng</b>
    </div>
    <div class="wrapper">
        <div class="container" id="abc"></div>

        <div class="Truoc"><button id="prev" onclick="prev()"
                style="background-color: #EEEEEE; color:rgb(131, 109, 109);">Trước<<< </button>
        </div>

        <div class="khung1123" id="slide-show" style="font-weight: 100;">
            <ul>
                <li><img width="150px" height="200px" src="../Ảnh/Anh3.pnj.jpg">
                    <p>Đừng Ngồi Chờ Chết <br> Trong Gió Bão</p>
                    <p><b style="color: red;">53.400đ</b> <i> -40%</i><br>
                        <s>89.000đ</s>
                    </p>
                </li>
                <li>
                    <td><img width="150px" height="200px" src="../Ảnh/Anh4.pnj.jpg">
                        <p>Không Phải Chưa Đủ<br> Năng Lực Mà ...</p>
                        <p><b style="color: red;">42.600đ</b> <i> -40%</i><br>
                            <s>71.000đ</s>
                        </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh5.pnj.jpg">
                    <p>Đời Ngắn Đừng Ngủ <br> Dài</p>
                    <p><b style="color: red;">45.000đ</b> <i> -40%</i><br>
                        <s>75.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh6.pnj.jpg">
                    <p>Tuổi Trẻ Đáng Giá<br> Bao Nhiêu</p>
                    <p><b style="color: red;">48.000đ</b> <i> -40%</i><br>
                        <s>80.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh7.pnj.jpg">
                    <p>Đừng Lựa Chọn An <br> Nhàn Khi Còn Trẻ</p>
                    <p><b style="color: red;">48.600đ</b> <i> -40%</i><br>
                        <s>81.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh10.pnj.jpg">
                    <p>Tiến Trình Thành<br> Nhân(New)</p>
                    <p><b style="color: red;">103.000đ</b> <i> -20%</i><br>
                        <s>129.000đ</s>
                    </p>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
        <div class="khung1123" id="slide-show" style="font-weight: 100;">
            <ul>
                <li><img width="150px" height="200px" src="../Ảnh/Anh31.pnj.jpg">
                    <p>Đàn Ông Sao Hỏa<br>Đàn Bà Sao Kim</p>
                    <p><b style="color: red;">88.800đ</b> <i> -40%</i><br>
                        <s>148.000đ</s>
                    </p>
                </li>
                <li>
                    <td><img width="150px" height="200px" src="../Ảnh/Anh31.pmj.jpg">
                        <p>Khí Chất Bao Nhiêu,<br>Hạnh Phúc Bấy Nhiêu</p>
                        <p><b style="color: red;">75.760đ</b> <i> -36%</i><br>
                            <s>119.000đ</s>
                        </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh32.pnj.jpg">
                    <p>Sống Thực Tế Giữ<br>Đời Thực Dụng</p>
                    <p><b style="color: red;">78.000đ</b> <i> -20%</i><br>
                        <s>98.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh33.pnj.jpg">
                    <p>Bạn Đắt Giá Bao <br>Nhiêu ?</p>
                    <p><b style="color: red;">66.642đ</b> <i> -33%</i><br>
                        <s>99.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh34.pnj.jpg">
                    <p>Cân Bằng Cảm Xúc ,<br>Cả Lúc Bão Giông</p>
                    <p><b style="color: red;">67.100đ</b> <i> -30%</i><br>
                        <s>96.000đ</s>
                    </p>
                </li>
                <li><img width="150px" height="200px" src="../Ảnh/Anh35.pnj.jpg">
                    <p>Lập Trình Quỹ Đạo<br>Cuộc Đời</p>
                    <p><b style="color: red;">88.983đ</b> <i> -36%</i><br>
                        <s>140.000đ</s>
                    </p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="Sau"><button id="next" onclick="next()"
                style="background-color: #EEEEEE; color:rgb(131, 109, 109);">Sau>>></button></div>
        <br>
        <div class="clearfix"></div>
    </div>
</div>

<div class="khung7">
    <ul>
        <li><img width="20px" height="20px" src="../Ảnh/AnhHuong.png"></li>
        <li><a href="#gioithieusach" style="font-size: 20px;"><b>GIỚI THIỆU SÁCH</b></a></li>
        <li><a href="#thongtinchitiet" style="font-size: 20px;"><b>THÔNG TIN CHI TIẾT</b></a></li>
        <li><a href="#danhgiavabinhluan" style="font-size: 20px;"><b>ĐÁNH GIÁ & BÌNH LUẬN</b></a></li>
    </ul>
</div>
<br><br>
<hr style="margin-left: 345px;">
<div class="clearfix"></div>
<br>

<div class="khungND" id="gioithieusach" style="background-color: #EEEEEE;">
    <form style="height: 319px; border: 1px solid rgb(219, 208, 208); background-color: white;">
        <table style="padding-top: 12px; padding-left: 10px;padding-right: 5px;">
            <tr>
                <td colspan="2"><b style="padding-top: 15px; color: #009933;font-size: 20px;">Thông tin tác giả</b></td>
            </tr>

            <tr>
                <td colspan="2">-------------------------------------------------------</td>
            </tr>
            <tr>
                <td colspan="2" style="color: #009933;">Dale Carnegie<br></td>
            </tr>
            <tr>
                <td>Dale Breckeridge</td>
                <td rowspan="5"><img width="120px" height="120px" src="../Ảnh/Anhtg.jpg" alt=""></td>
            </tr>
            <tr>
                <td>Carnegie (24/11/1888 –</td>

            </tr>
            <tr>
                <td>1/11/1955) là một nhà</td>

            </tr>
            <tr>
                <td>văn và nhà thuyết trình</td>

            </tr>
            <tr>
                <td>Mỹ và là người phát</td>
            </tr>
            <tr>
                <td colspan="2">triển các lớp tự giáo dục, nghệ thuật bán hàng,</td>
            </tr>
            <tr>
                <td colspan="2">huấn luyện đoàn thể, nói trước công chúng và </td>
            </tr>
            <tr>
                <td colspan="2">các kỹ năng giao tiếp giữa mọi người. Ra đời </td>
            </tr>
            <tr>
                <td colspan="2">trong cảnh nghèo đói tại ...</td>
            </tr>
        </table>
    </form>
    <p style="font-size: 19px; font-weight: 100;padding-top: 8px;">
        <?php echo $row['chitiet'] ?>

        <br><br><img style="width:500px; height:700px; padding-left: 180px;"
            src="../images/<?php echo $row['hinhanh'] ?>"><br><br><br>
        Cuộc sống mỗi người sẽ có những bộn bề, lo lắng. Mỗi ngày trôi qua cũng giống như một trang sách được mở ra. Có
        những lúc đọc sách để giảm căng thẳng và mệt mỏi.
        Vì thế bạn hãy cố gắng đọc chúng trong thời gian rảnh thay vì không biết phải làm gì. Bởi như thế bạn sẽ không
        mất phí để học, mà còn học được nhiều điều không ai có thể dạy bạn được. <br>
        <b style="font-size: 19px;">Mời bạn đón đọc !</b>
    </p>
    <div class="clearfix"></div>
</div>
<br>
<br>
<div class="khungttct" id="thongtinchitiet">
    <b style="font-size: 19px; padding-left: 0px;">Thông tin chi tiết</b><br>
    <div class="khungtt1">
        <ul>
            <li>Tác giả : <i style="padding-left: 110px;">Dale Camegie</i></li>
            <li>Nhà xuất bản : <i style="padding-left: 70px;">Nxb Tổng hợp TP.HCM</i></li>
            <li>Mã Sản phẩm : <i style="padding-left: 65px;">827482525925</i></li>
            <li>Ngôn ngữ : <i style="padding-left: 90px;">Tiếng Việt</i></li>
            <li>Kích thước : <i style="padding-left: 80px;">14.5x20.5 cm</i></li>
            <li>Số trang : <i style="padding-left: 100px;">320</i></li>

        </ul>
    </div>
    <div class="khungtt2">
        <ul>
            <li>Người dịch : <i style="padding-left: 80px;">Nguyễn Danh Hà</i></li>
            <li>Nhà phát hàng : <i style="color: blue;padding-left: 55px;">Trí Việt</i></li>
            <li>Khối lượng : <i style="padding-left: 75px;">484.00 gam</i></li>
            <li>Định dạng : <i style="padding-left: 80px;">Bìa cứng</i></li>
            <li>Ngày phát hành : <i style="padding-left: 40px;">06/2018</i></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<br><br><br>
<div class="khungdgbl" id="danhgiavabinhluan">
    <b style="font-size: 19px;color: #009933;">Nhận xét từ khách hàng</b><br>
    <div class="khungdgbl1">
        <ul>
            <li>
                <div class="khungdgbl11">
                    <table>
                        <tr>
                            <td rowspan="2"><b style="padding-right: 10px;">Đánh Giá trung bình</b></td>
                            <td>|</td>
                            <td>5 <img width="20px" height="20px" src="../Ảnh/Anhsao.jpg" alt="">
                                -----------------------------9</td>
                        </tr>
                        <tr>
                            <td>|</td>
                            <td>4 <img width="20px" height="20px" src="../Ảnh/Anhsao.jpg" alt="">
                                -----------------------------5</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 23px;">(0 - người đánh giá)</td>
                            <td>|</td>
                            <td>3 <img width="20px" height="20px" src="../Ảnh/Anhsao.jpg" alt="">
                                -----------------------------1</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><b style="padding-left: 50px;">0,0</b></td>
                            <td>|</td>
                            <td>2 <img width="20px" height="20px" src="../Ảnh/Anhsao.jpg" alt="">
                                -----------------------------0</td>
                        </tr>
                        <tr>
                            <td>|</td>
                            <td>1 <img width="20px" height="20px" src="../Ảnh/Anhsao.jpg" alt="">
                                -----------------------------0</td>
                        </tr>
                    </table>
                </div>
            </li>
            <div class="khungdgbl12">
                <li>Đăng nhập để gửi nhận xét của Bạn<br>
                    <button style="height: 25px; background-color: #006633; color: #Dddddd; border: #Dddddd;"><b>ĐĂNG
                            NHẬP</b></button> Bạn chưa có tài khoản? <br><a href="ĐăngKý.html">Đăng Ký</a>
                </li>
            </div>
        </ul>
    </div>
</div>
<?php 
    }	
?>
<div class="clearfix"></div>
<br><br>
<div class="khungfb" id="danhgiavabinhluan">
    <?php
        include'connect.php';
        $dq = "select * from wp_binhluan where idsp ='$idsp'";
        $result1 = mysqli_query($link,$dq);
        $dem = mysqli_num_rows($result1);
    ?>

    <b style="font-size: 19px;color: #009933;">Bình luận từ khách hàng (<?php echo $dem ?>) </b><br><br>
    <b><?php echo $dem ?> bình luận</b>
    <hr style="margin-left: 0px; width: 1200px;"><br>
    <div class="khungfb1">
        <table>

            <?php 
    include'connect.php';
	$sql = "select * from wp_binhluan where idsp ='$idsp'";
    $result = mysqli_query($link,$sql);
    while ($row=mysqli_fetch_array($result))
	{
        ?>
            <tr>

                <td><img src="../images/<?php echo $row['anhbl'] ?>" width='50px' height='50px'></td>
                <td><b><?php echo $row['tenbl'] ?> </b> </td>
                <td><i><?php echo $row['noidung'] ?> </i></td>
            </tr>
            <?php 
        }	
        ?>
        </table>
        <form method="post" action="">
            <table>
                <tr>
                    <?php
            include "connect.php";
            $username = $_SESSION['user'];
	        $sql = "select * from wp_dangnhap where user='$username'";
		    $result = mysqli_query($link,$sql);
		    $row = mysqli_fetch_array($result);?>

                    <td><a href="taikhoan/TàiKhoản.php"><img src="../images/<?php echo $row['hinhanh']; ?>"
                                style="width: 50px;height:50px;"></a></td>
                    <td><b><?php echo $row['tennd']; ?></b></td>
                    <!-- <td><input style="width: 100px;" type="text" name="tenbl" placeholder="Tên..."></td> -->
                    <td><input style="width: 925px;" type="text" name="noidung" placeholder="Thêm bình luận..."></td>
                    <td><button style="height: 30px;background-color: green;color:white;border-color:green;" type="submit"
                            name="submit">Bình Luận</button></td>

                    <?php 
                if(isset($_POST['submit']))
                {
                    $anhbl = $row['hinhanh'];
	                $tenbl = $row['tennd'];
	                $noidung = $_POST['noidung'];
	
	                $insert="INSERT INTO wp_binhluan VALUES('','$idsp','$anhbl','$tenbl','$noidung')";
		            $query=mysqli_query($link,$insert);
                    if($query) 
                    {
                        $acb=$_GET['idsp'];

                        echo "<meta http-equiv='refresh' content='0'>";//load lại trang
                    }
                }
?>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <hr style="margin-left: 0px; width: 1200px;"><br>
    <div class="clearfix"></div>
</div>


<div class="khungend" style="background-color: #006633;">
    <ul class="khungend1">
        <li style="color: white;margin-left:200px;">ĐĂNG KÝ NHẬN EMAIL <br>
            Đăng kí nhận thông tin sách mới,sách bán</li>
        <li>
            <input type="text" placeholder="Tên sách của bạn">
        </li>
        <li>
            <input type="text" placeholder="Nhận email của bạn">
        </li>
        <li>
            <select style="width: 200px;height: 35px;">
                <option value="1">Thể loại yêu thích</option>
                <option value="2">Tất cả</option>
                <option value="3">Kỹ Năng Sống</option>
                <option value="3">Kinh Tế</option>
                <option value="3">Văn Học</option>
                <option value="3">Khoa Học - Công Nghệ</option>
                <option value="3">Danh Nhân - Văn Hóa - Du Lịch</option>
                <option value="3">Y Học - Sức Khỏe</option>
                <option value="3">Ngoại Ngữ</option>
            </select>
        </li>
        <li>
            <input style="width: 200px;height: 35px; color: #006633" type="submit" value="ĐĂNG KÝ NGAY">
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<br>
<div class="khungEnd2" style="background-color: black; height: 50px;">
    <h4 style="text-align:center;color:white;padding-top:15px;">Bản quyền thuộc MâyBook !!!</h4>
</div>
</div>

<script>
var imgSlide = document.getElementsByClassName("khung1123");
var numSlide = 0;
showSlide(0);

function next() {
    numSlide++;
    if (numSlide > 1) {
        numSlide = 0;
    }
    showSlide(numSlide);
}

function prev() {
    numSlide--;
    if (numSlide < 0) {
        numSlide = 1;
    }
    showSlide(numSlide);
}

function showSlide(n) {
    for (var i = 0; i < imgSlide.length; i++) {
        imgSlide[i].style.display = "none";
    }

    imgSlide[n].style.display = "block";
}
</script>