<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài Khoản</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="muahang.css">
    <script type="text/javascript" src="js/muahang.js"></script>
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
else {
?>
    <p> Chào bạn
        <?= $_SESSION['user']?><a href="dangnhap/logout.php"> | Thoát</a></p>
    <?php	}?>
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
            <input type="text" placeholder="  Tìm kiếm tựa sách,tác giả">
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
            <a href="taikhoan/TàiKhoản.php"><img src="../images/<?php echo $row['hinhanh']; ?>"
                    style="width: 60px;height:60px;"></a>
        </div>
        <div class="khung12">
            <a href="">Chào Bạn <?= $_SESSION['user']?><a href="../dangnhap/logout.php"> | Thoát</a></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="khung121" style="padding-top:0px;">
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
            </ul>
            <ul class="khung22" style="color: white;">
                <li><i class="fa fa-phone"> Hotline: 1234 5678 | </i></li>
                <li><a
                        href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML"><i
                            class="fa fa-comment"></i> Hỗ trợ trực tuyến</a></li>
            </ul>
        </div>
    </div>
    </div>
    <div class="ABX">
        <div class="DangNhap">
            <?php
            include "connect.php";
            $username = $_SESSION['user'];
	        $sql = "select * from wp_dangnhap where user='$username'";
		    $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
        ?>
            <table border="1" style="width:600px;">
                <tr>
                    <td colspan="3" rowspan="4">
                        <?php
                        include 'connect.php';
                        $idsp=$_GET['idsp'];
                        $rows=mysqli_query($link,"select * from wp_sanpham where idsp=$idsp");
                        $abc=mysqli_fetch_array($rows)
                    ?>
                        <br><img width="180px" height="200px" style="padding-left:75px;"
                            src="../images/<?php echo $abc['hinhanh'];?> " /> <br>
                        <h3 style="text-align:center;color:#003366;"><?php echo $abc['tensp'];?></h3>
                        <form method="POST">
                            <div class="khungform">
                                <i style="padding-left:75px;font-size:23px;color:red;">Giá : <input
                                        style="width:80px;font-size:23px;text-align:center;background-color:white;color:blue;"
                                        type="text" name="gia" value="<?php echo $abc['gia'];?>"></i><br><br>
                               
                                <input
                                    style="width: 30px;height: 39px;background-color: #EEEEEE;color: black;margin-left:120px;"
                                    type="button" value=" - " onclick="tru(this.form)"><input
                                    style="width: 40px;height: 33px; background-color: #EEEEEE;color: black;text-align:center;"
                                    type="text" value="1" name="kq" size="9"><input
                                    style="width: 30px;height: 39px; background-color: #EEEEEE;color: black;text-align:center;"
                                    type="button" value=" + " onclick="cong(this.form)">
                            </div>
                            <ul class="khung441">
                                <li><input type="button"
                                        style="margin-top:5px; background-color: #339933;color: white;height: 28px;border-color:white;"
                                        value="Tổng Tiền" onclick="chonmua(this.form)"></li>
                                <li><input style="width: 100px;height: 38px;text-align:center;color:red;font-size:17px;"
                                        type="text" value="0" name="thanhtien" size="9">
                                </li>
                            </ul>

                    </td>
                    <td colspan="4">
                        <b style="font-size: 22px;color:red;text-align:center;">----------- Thông Tin Đặt Hàng --------</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="color:green;">Khách Hàng :</p>
                    </td>
                    <td>
                        <p style="color:green;"><?php echo $row['tennd']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="color:green;">Điện Thoại :</p>
                    </td>
                    <td>
                        <p style="color:green;"><?php echo $row['dienthoai']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="color:green;">Email :</p>
                    </td>
                    <td>
                        <p style="color:green;"><?php echo $row['email']; ?></p>
                    </td>
                </tr>
                <form action="" method="POST" id="a" onsubmit="return kiemtra();">
                    <table border="1" style="width:600px;">
                        <tr>
                            <td>
                                <p style="color:green;padding-left:10px;">Địa Chỉ Nhận Hàng :</p>
                            </td>
                            <td>
                                <input type="text" style="width: 350px;height: 18px;margin-left:30px;"
                                    name="diachinhanhang">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-left:200px;">
                                <input type="submit"
                                    style="background-color: #339933;color: white;height: 28px;border-color:white;margin-left:70px;"
                                    name="submit" value="Đặt hàng" />
                            </td>
                        </tr>

                        <?php
    if(isset($_POST['submit']))
    {
        $tennd=$row['tennd'];
        $dienthoai=$row['dienthoai'];
        $email=$row['email'];
        $diachinhanhang=$_POST['diachinhanhang'];

        $tensp=$abc['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['kq'];
        $thanhtien=$_POST['thanhtien'];
        $ngay=date('Y-m-d');

			$sql=mysqli_query($link,"select * from wp_dangnhap where idnd='".$_SESSION['idnd']."'");
			$row=mysqli_fetch_array($sql);
			$idnd=$row['idnd'];

            $ha=mysqli_query($link,"select * from wp_sanpham where idsp='".$_GET['idsp']."'");
			$hau=mysqli_fetch_array($ha);
            $idsp=$_GET['idsp'];
    
            $insert1="INSERT INTO wp_tamhoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,manv,user) VALUES ('$idnd','$tennd', '$diachinhanhang', '$dienthoai', '$email', '$ngay','0','$username')";

            $insert2="INSERT INTO wp_hoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,manv,status,user) select '$idnd','$tennd', '$diachinhanhang', '$dienthoai', '$email', '$ngay','0','0','$username' from wp_tamhoadon";

            $insert3="INSERT INTO wp_cthoadon(idsp,tensp,gia,soluong,thanhtien,idnd,hoten,ngaydat,mahd) select '$idsp','$tensp','$gia','$soluong','$thanhtien','$idnd','$tennd','$ngay',wp_tamhoadon.mahd  from wp_tamhoadon" ;   
            
            $insert4="Delete from wp_tamhoadon";                 

            $query=mysqli_query($link,$insert1);
            $query=mysqli_query($link,$insert2);
            $query=mysqli_query($link,$insert3);
            $query=mysqli_query($link,$insert4);

    // $sql="INSERT INTO wp_hoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,manv,user) VALUES ('$idnd','$tennd', '$diachinhanhang', '$dienthoai', '$email', '$ngay','0','$username')";

    // $ha="INSERT INTO wp_cthoadon(idsp,tensp,gia,soluong,thanhtien,idnd,hoten,ngaydat,mahd) select '$idsp','$tensp','$gia','$soluong','$thanhtien','$idnd','$tennd','$ngay',wp_tamhoadon.mahd  from wp_tamhoadon" ;  

    // mysqli_query($link,$sql);
    // mysqli_query($link,$ha);

            
        echo "
        <script language='javascript'>
                alert('Đơn hàng của bạn đã được mua thành công ! Vui lòng chờ và nhận hàng từ 2-3 ngày tới ! Thân Ái !');
                window.open('../chitietspmua/chitietspmua.php?idsp=$idsp ','_self',3);
        </script>
        ";

}
?>
                </form>
            </table>
            </table>
        </div>
    </div>
    <script language="javascript">
    function kiemtra() {
        if (a.diachinhan.value == "") {
            alert("Bạn chưa điền địa chỉ nơi nhận hàng !!!")
            a.diachinhan.focus();
            return false;

        }

        if (a.diachinhan.value != "") {
            a.submit();
        }
    }
    </script>
    <div class="clearfix"></div>
    </div>
    <br>
    <div class="khungend" style="background-color: #006633;">
        <ul class="khungend1">
            <li style="color: white;">ĐĂNG KÝ NHẬN EMAIL <br>
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
    </div>
    <div class="khungEnd">
        <table style="margin-left: 290px; font-weight: 100; font-size: 14px; width: 1300px; background-color: white;">
            <br>
            <tr>
                <td><b>HỖ TRỢ KHÁCH HÀNG</b></td>
                <td><b>VỀ MÂYBOOK</b></td>
                <td><b>HỢP TÁC VÀ LIÊN KẾT</b></td>
                <td><b>PHƯƠNG THỨC THANH TOÁN</b></td>
                <td><b>KẾT NỐI VỚI CHÚNG TÔI</b></td>
            </tr>
            <tr>
                <td><b style="color:brown;"> <br> Hotline chăm sóc khách hàng: 1900-1234</b></td>
                <td><br>Giới thiệu MâyBook</td>
                <td><br>Quy chế hoạt động sàn GDTMĐT</td>
                <td rowspan="4"><br> <img src="../Ảnh/Anh37.pnj.png"></td>
                <td rowspan="2"> <br><a href="https://www.facebook.com/"><img width="25" src="../Ảnh/AnhFB.pnj.jpg"></a>
                    <a style="padding-left: 10px;" href="https://www.youtube.com/"><img width="25" height="27px"
                            src="../Ảnh/Anh38.pnj.jpg"></a>
                </td>
                </td>
            </tr>
            <tr>
                <td>(1000đ/phút,8-21h kể cả T7,CN</td>
                <td>Tuyển Dụng</td>
                <td>Bán hàng cùng MâyBook</td>
            </tr>
            <tr>
                <td>Các câu hỏi thường gặp</td>
                <td>Chính sách bảo mật thanh toán</td>

            </tr>
            <tr>
                <td>Giử yêu cầu hỗ trợ</td>
                <td>Chính sách bảo mật thông tin cá nhân</td>
                <td></td>
                <td><b>TẢI ỨNG DỤNG</b></td>
            </tr>
            <tr>
                <td>Hướng dẫn đặt hàng</td>
                <td>Chính sách giải quyết khiếu lại</td>
                <td></td>
                <td><b>THANH TOÁN AN TOÀN</b></td>
                <td rowspan="3"><a href="https://www.apple.com/vn/ios/app-store/"><img width="120px"
                            src="../Ảnh/Anh39.pnj.png"></a> <br>
                    <a href="https://play.google.com/store"><img width="120px" src="../Ảnh/Anh40.pnj.png"></a>
                </td>
            </tr>
            <tr>
                <td>Phương thức vận chuyển</td>
                <td>Điều khoản sử dụng</td>
                <td></td>
                <td rowspan="3"><img src="../Ảnh/Anh41.pnj.png" alt=""></td>

            </tr>
            <tr>
                <td>Chính sách đổi trả</td>
                <td>Hội sách online</td>

            </tr>
            <tr>
                <td>Hướng dẫn mua trả góp</td>
                <td>Giới thiệu MâyBook xu</td>
            </tr>
            <tr>
                <td>Chính sách hàng nhập khẩu</td>
                <td>MâyBook tư vấn</td>
            </tr>
            <tr>
                <td>Hỗ trợ khách hàng hotro@mây.vn</td>
                <td>Bán hàng doanh nghiệp</td>
            </tr>
            <tr>
                <td>Báo lỗi bảo mật security@mây.vn</td>
            </tr>
        </table>
        <br><br>
        <div class="clearfix"></div>
        <br>
        <div class="khungEnd1">
            <p><b style="padding-left: 340px;">THƯỜNG ĐƯỢC TÌM KIẾM</b></p>
            <table style="background-color: white;">
                <tr>
                    <td>tryện dan brown</td>
                    <td>sách warren buffelt</td>
                    <td>sách digital marketing</td>
                    <td>truyện mới của nguyễn nhật ánh</td>
                    <td>sách cho con</td>
                </tr>
                <tr>
                    <td>giáo trình tiếng anh trẻ em</td>
                    <td>sách hay về kinh tế</td>
                    <td>sách hay về đầu tư</td>
                    <td>sách doanh nhân</td>
                    <td>sách hay về gia đình</td>
                </tr>
                <tr>
                    <td>sách học tiếng trung</td>
                    <td>tiểu thuyết tình yêu</td>
                    <td>sách y học</td>
                    <td>tủ sách gia đình</td>
                    <td>sách dãy kĩ năng giao tiếp</td>
                </tr>
                <tr>
                    <td>sách blockchain</td>
                    <td>sách du học</td>
                    <td>sách kỹ năng mềm</td>
                    <td>sách làm giàu</td>
                    <td>sách phong thủy cổ</td>
                </tr>
                <tr>
                    <td>sách khởi nghiệp</td>
                    <td>sách bán hàng</td>
                    <td>sách về đầu tư chứng khoán</td>
                    <td>sách dạy nấu ăn</td>
                    <td>sách tâm lý về tình yêu</td>
                </tr>
                <tr>
                    <td>sách quản lý nhân sự</td>
                    <td>sách quản trị kinh doanh</td>
                    <td>sách tài chính</td>
                    <td>sách cho thiếu nhi</td>
                    <td>sách tự học tiếng anh giao tiếp</td>
                </tr>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
    <br>
    <div class="khungEnd2" style="background-color: black; height: 50px;">
        <h4 style="text-align:center;color:white;padding-top:15px;">Bản quyền thuộc MâyBook !!!</h4>
    </div>
    </div>
    </div>
</body>

</html>