<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ĐăngKý.css">
</head>

<body>
    <div class="khung1">
        <ul class="khung11">
            <a href="../index.php">
                <h1 style="color: #006633">mây<h1 style="color: #FF0000">book<h1 style="color: #006633">.com</h1>
                    </h1>
                </h1>
            </a>
        </ul>
        <div class="form1">
            <input type="text" placeholder="  Tìm kiếm tựa sách,tác giả">
        </div>
        <div class="form2">
            <input type="button" value="Tìm sách">
        </div>
        <div class="Image1">
            <a href="../GiỏHàng/GioHang.php"><img width="50" height="50"
                    src="https://cdn.pixabay.com/photo/2015/10/22/16/42/icon-1001596_960_720.png" alt=""></a>

        </div>

        <div class="khung12">
            <a href="../dangnhap.php">Đăng nhập</a>
            <a href="">| Đăng Ký</a>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="khung121">
        <div class="khung2">
            <ul>
                <li><a href="../index.php">
                        <p><strong>TRANG CHỦ</strong></p>
                    </a></li>
                <li><a href="../GiớiThiệu/GiớiThiệu.php">
                        <p><strong>GIỚI THIỆU</strong></p>
                    </a></li>
                <li><a href="../TinMới/TinMới.php">
                        <p><strong>TIN MỚI</strong></p>
                    </a></li>
                <li><a href="../HướngDẫn/HướngDẫn.php">
                        <p><strong>HƯỚNG DẪN</strong></p>
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
        <div class="DangKy">
            <?php 
include 'connect.php';
if(isset($_POST['submit']))
{
	$dk=mysqli_escape_string($link,$_POST['idnd']);
	$tennd=mysqli_escape_string($link,$_POST['username']);
	$tendaydu = mysqli_escape_string($link,$_POST['fullname']);
	$sex = mysqli_escape_string($link,$_POST['gioitinh']);
	$phone = mysqli_escape_string($link,$_POST['dienthoai']);
	$address = mysqli_escape_string($link,$_POST['diachi']);
	
	$pass=mysqli_escape_string($link,$_POST['pass2']);
	$email=mysqli_escape_string($link,$_POST['email']);
	
	//Lay gio cua he thong
		//$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
	//Lay ngay cua he thong
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
		$anh = $_FILES['c_img']['name'];
		
		if($anh != null)
		{
			$path = "images/";
			$tmp_name = $_FILES['c_img']['tmp_name'];
			$anh = $_FILES['c_img']['name'];
			move_uploaded_file($tmp_name,$path.$anh);
	
			$insert="INSERT INTO wp_dangnhap(idnd,hinhanh,tennd,user,pass,gioitinh,email,dienthoai,diachi,ngaydk,phanquyen) VALUES('$dk','$anh','$tendaydu', '$tennd', '$pass','$sex', '$email','$phone', '$address','$ngay', '1')";
            $query=mysqli_query($link,$insert);
            if($query) {
                echo "
                <script language='javascript'>
                    alert('Ðăng ký thành công');
                    window.open('dangky.php','_self', 1);
                </script>
            ";
                }
		}
}
?>
            <form method="post" name="frm" onsubmit=" return dki()" action="" enctype="multipart/form-data">
                <table width="450" border="0" cellpadding="5" align="center">
                    <tr>
                        <td>ID người dùng :</td>
                        <td><input type="text" name="idnd" size="40" placeholder="Mời nhập ID"></td>
                    </tr>
                    <tr>
                        <td>Ảnh</td>
                        <td><input type="file" name="c_img"></td>
                    </tr>
                    <tr>
                        <td>Họ tên :</td>
                        <td><input type="text" name="fullname" size="40" placeholder="Mời nhập Họ tên"></td>
                    </tr>
                    <tr>
                        <td>Tài khoản :</td>
                        <td><input type="text" name="username" size="40" placeholder=" Mời nhập Tài khoản"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu :</td>
                        <td><input type="text" name="pass1" size="40" placeholder="Mời nhập Mật khẩu"></td>
                    </tr>
                    <tr>
                        <td>Nhập lại mật khẩu :</td>
                        <td><input type="text" name="pass2" size="40" placeholder="Mời nhập Nhập Lại Mật Khẩu"></td>
                    </tr>
                    <tr>
                        <td>Nhập Email :</td>
                        <td><input type="text" name="email" size="40" placeholder="Mời nhập Nhập email"></td>
                    </tr>
                    <tr>
                        <td>Giới tính : </td>
                        <td class="input">
                            <select name="gioitinh">
                                <option value="">-Chọn giới tính-</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Địa chỉ :</td>
                        <td><input type="text" name="diachi" size="40" placeholder="Mời nhập  Địa Chỉ"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td><input type="text" name="dienthoai" size="40" placeholder="Mời nhập SĐT"></td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <button
                                style="height: 30px;background-color: green;color:white;border-color:white;width:100px;margin-left:110px;"
                                type="submit" name="submit">Đăng ký</button>
                            <button style="height: 28px;" type="reset">Hủy</button>
                        </td>

                </table>
                </from>
                <script language="javascript">
                function dki() {
                    if (frm.fullname.value == "") {
                        alert("Bạn chưa nhập họ tên. Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.username.value == "") {
                        alert("Bạn chưa nhập tài khoản . Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.pass1.lenght < 10) {
                        alert("SĐT bạn nhập quá ngắn. Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.pass1.lenght > 11) {
                        alert("Bạn NHập sai SĐT. Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.pass1.value != frm.pass2.value) {
                        alert("pass chưa đúng.Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.pass1.value == "") {
                        alert("Bạn chưa nhập mật khẩu . Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                    if (frm.pass2.value == "") {
                        alert("Bạn chưa nhập lại mật khẩu . Vui lòng kiểm tra lại");
                        frm.tennd.focus();
                        return false;
                    }
                }
                </script>
        </div>
    </div>
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

    <div class="khungEnd">
        <table style="margin-left: 285px; font-weight: 100; font-size: 14px; width: 1300px; height: 100px;">
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
            <p><b style="padding-left: 335px;">THƯỜNG ĐƯỢC TÌM KIẾM</b></p>
            <table style="margin-left: 305px;">
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

</body>

</html>