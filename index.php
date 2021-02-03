<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/TrangChủ.css">
    <script type="text/JavaScript">
        function danhha()
    {
        var A = document.getElementById("dacnhantam");
        var B = document.getElementById("dacnhantam1");
        A.src = B.src;
    }
    </script>

</head>

<?php
include "connect.php";
    $soluonggio = "select count(*) as df from wp_giohang";
    $abc = mysqli_query($link,$soluonggio);

    while($record = $abc->fetch_array())
    { $tong = $record['df']; } 
?>

<body>
    <div class="chung">
        <div class="khung1">
            <ul class="khung11">
                <li>
                    <a href="">
                        <h1 style="color: #006633">mây<h1 style="color: #FF0000">book<h1 style="color: #006633">.com
                                </h1>
                            </h1>
                        </h1>
                    </a>
                </li>
            </ul>
            <div class="form1">
                <input type="text" placeholder="  Tìm kiếm tựa sách,tác giả">
            </div>
            <div class="form2">
                <input type="button" style="color:white;" value="Tìm sách">
            </div>
            <div class="Image1">
                <a href="GiỏHàng/GioHang.php"><img width="50" height="50"
                        src="https://cdn.pixabay.com/photo/2015/10/22/16/42/icon-1001596_960_720.png" alt=""></a>

            </div>
            <div class="khung12">
                <a href=""><b style="color:red;">(<?php echo $tong; ?>)</b></a>
                <a href="dangnhap.php">Đăng nhập</a>
                <a href="dangki/dangky.php">| Đăng Ký</a>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="khung121">
            <div class="khug"></div>
            <div class="khung2">
                 <?php 
	                    include "connect.php";
	                    $select = "select * from wp_menu";
                        $query = mysqli_query($link,$select);
                        
                    ?>
                        <?php
		                    while($bien = mysqli_fetch_array($query)){
	                    ?>
                    <ul>
                        <li>
                            <a href="<?php echo $bien['url']; ?>">
                                <p style="font-size:18px;"><strong><?php echo $bien['vi_name']; ?></strong></p>
                            </a>
                        </li>
                    </ul>
                    <?php 
                        }
                    ?>
                <ul class="khung22" style="color: white;">
                    <li><i class="fa fa-phone"> Hotline: 1234 5678 | </i></li>
                    <li><a
                            href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML"><i
                                class="fa fa-comment"></i> Hỗ trợ trực tuyến</a></li>
                </ul>
            </div>
        </div>
        <div class="clefix"></div>

        <div class="ABC">
            <table>
                <tr>
                    <td>
                        <i class="fa fa-align-left"></i>
                        <span><a href="" style="font-size: 20px;"><b>Danh Mục Sách</b></a></span>
                        <span><i class="fa fa-angle-down"></i></span>
                    </td>
                </tr>
                    <?php 
                        $fp = "luottruycap.txt";
                        $fo = fopen($fp,'r');
                        $fr= fread($fo,filesize($fp));
                        $fr++;
                        $fc = fclose($fo);

                        $fo = fopen($fp,'w');
                        $fw = fwrite($fo,$fr);
                        $fc = fclose($fo);

	                    include "connect.php";
	                    $select = "select * from wp_danhmuc";
                        $query = mysqli_query($link,$select);  
                    ?>
                        <?php
		                    while($bien = mysqli_fetch_array($query)){
	                    ?>
                            <tr>
                                <td><a href=""><?php echo $bien['tendm']; ?><span style="padding-right: 20px;"><img width="20" height="15"
                                    src="https://cdn1.iconfinder.com/data/icons/interface-59/24/arrow-righ-forward-next-action-chevron-3-512.png"></span></a>
                                </td>
                            </tr>
                    <?php 
                        }
                    ?>
            </table>
          <div class="clearfix">
                <div class="khungMS11" style="background-color:#666666;">
                    <div class="khungMS12">
                        <div class="khungMS13">
                            <a href=""><img width="150" height="220" id="slide-show" src="Ảnh/Anh20.pnj.jpg"></a>
                        </div>
                        <div class="khungMS14">
                            <img width="80px" height="80px" src="Ảnh/Anh21.pnj.png">
                        </div>
                    </div>

                    <div class="khung15">
                        <a href=""><img width="200" height="303" src="Ảnh/Anh6.pnj.jpg"></a>
                    </div>
                    <div class="khung16">
                        <a href=""><img style="padding-top:1px;" width="200" height="302" src="Ảnh/Anh7.pnj.jpg"></a>
                    </div>
                    <div class="khung17">
                        <img width="80px" height="80px" src="Ảnh/Anh21.pnj.png">
                    </div>
                    <div class="khung18">
                        <img style="padding-left:3px;padding-top:3px;" width="929px" height="155px" src="Ảnh/anhdong.gif">
                    </div>
                    <!-- <img width="935px" height="161px" src="Ảnh/anhdong.gif"> -->
                </div>
            </div>
            <br>
            <div class="khung7" style="background-color: #EEEEEE;">
                <div class="khung62">
                    <b style="font-size: 20px;">Tác Giả Nổi Bật</b>
                </div>
                <img height="190px" src="Ảnh/Anh43.pnj.jpg">

                <p>
                    <strong style="font-size: 19px; color: #006633;">Haruki Murakami</strong><br><br>
                    Haruki Murakami sinh năm 1949 tại Kyoto và hiện đang sống ở Boston, Mỹ, là một trong <br> những tiểu
                    thuyết gia,
                    dịch giả văn học người Nhật Bản được biết đến nhiều nhất hiện nay <br> cả trong lẫn ngoài nước Nhật.
                    Từ thời điểm
                    nhận giải thưởng Nhà văn mới Gunzo năm <br> 1979 đến nay, hơn một phần tư thế kỷ hoạt động và viết
                    lách, tác phẩm
                    của ông đã được <br> dịch ra khoảng 38 thứ tiếng trên thế giới, đồng thời trong nước ông là người
                    luôn tồn tại ở <br> tiền
                    cảnh sân khấu văn học Nhật Bản. Murakami đã trở thành hiện tượng trong văn học Nhật <br> Bản đương
                    đại với những mĩ
                    danh "nhà văn được yêu thích", "nhà văn best-seller", "nhà văn <br> của giới trẻ".
                </p>
                <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------
                </p>
                <div class="khungtacgia">
                    <table style="margin-left: 0px; margin-top: 0px;">
                        <tr font-size: 16px;>
                            <td><img width="90px" height="130px" src="Ảnh/Anhtg1.jpg"></td>
                            <td><a href="dangnhap.php" style="color: #009933;">Tôi Nói Gì Khi Nói Về <br> Chạy Bộ (Tái
                                    Bản 2018) <br><br>
                                    <b style="color: red;">46.500đ </b> <i style="color: black;"> -25%</i><br>
                                    <s style="padding-left: 8px; color: black;">62.000đ</s></a></td>

                            <td><img width="90px" height="130px" src="Ảnh/Anhtg2.jpg"></td>
                            <td><a href="dangnhap.php" style="color: #009933;">Rừng Na Uy(Tái Bản Lần 3)<br><br><br>
                                    <b style="color: red;">80.932đ</b> <i style="color: black;"> -37%</i><br>
                                    <s style="padding-left: 8px; color: black;">128.000đ</s></a></td>

                            <td><img width="90px" height="130px" src="Ảnh/Anhtg3.jpg"></td>
                            <td><a href="dangnhap.php" style="color: #009933;">Lắng Nghe Gió Hát<br><br><br>
                                    <b style="color: red;">56.250đ</b> <i style="color: black;"> -25%</i><br>
                                    <s style="padding-left: 8px; color: black;">75.000đ</s></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="khung8">
                <table style="margin-left: 0px; width: 300px;">
                    <tr>
                        <td colspan="2" style="font-size: 19px;"><b>Voucher Mua Sách MâyBook.com</b></td>
                    </tr>
                    <tr>
                        <td><img width="100px" height="60px" src="Ảnh/AnhVC1.jpg"></td>
                        <td><a href="VouCher/VouCher1.php">PMH Trị Giá 300k Trên
                                MâyBook.com <br>
                                <s>300.000đ</s> <b style="color: red;">270.000đ</b></a></td>
                    </tr>
                    <tr>
                        <td><img width="100px" height="60px" src="Ảnh/AnhVC2.jpg"></td>
                        <td><a
                                href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML">PMH
                                Trị Giá 300k Trên
                                MâyBook.com <br>
                                <s>500.000đ</s> <b style="color: red;">450.000đ</b></a></td>
                    </tr>
                    <tr>
                        <td><img width="100px" height="60px" src="Ảnh/AnhVC3.jpg"></td>
                        <td><a
                                href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML">PMH
                                Trị Giá 300k Trên
                                MâyBook.com <br>
                                <s>1.000.000đ</s> <b style="color: red;">900.000đ</b></a></td>
                    </tr>
                </table>

                <div class="khung9"></div>
                <table style="margin-left: 0px; width: 300px; height: 210px;">
                    <tr>
                        <td colspan="2" style="font-size: 19px;"><b>Voucher Đọc Sách MâyBook</b></td>
                    </tr>
                    <tr>
                        <td><img width="100px" height="65px" src="Ảnh/AnhVC5.jpg"></td>
                        <td><a href="VouCher/VoucherDoc1.php">Gói 1 Năm Đọc Sách Trên <br> Ứng Dụng MâyBook<br>
                                <s>490.000đ</s> <b style="color: red;">392.000đ</b></a></td>
                    </tr>
                    <tr>
                        <td><img width="100px" height="65px" src="Ảnh/AnhVC4.jpg"></td>
                        <td><a
                                href="https://www.vforum.vn/diendan/showthread.php?61619-Bang-ma-mau-HEX-RGB-CMYK-day-du-cho-CSS-HTML">Gói
                                3 Năm Đọc Sách Trên <br> Ứng Dụng MâyBook<br>
                                <s>990.000đ</s> <b style="color: red;">792.000đ</b></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="khungtail">
            <div class="khung62">
                <b>Sách Bán Chạy</b>
            </div>
            <div class="wrapper">
                <div class="khung1123" id="slide-show" style="font-weight: 100;">
                    <?php 
	                    include "connect.php";
                        //$select = "select * from wp_sanpham Limit 6 ";
                        $sp_tungtrang = 6;
                        if(!isset($_GET['trang'])){
                            $trang =1;
                        }else{
                            $trang =$_GET['trang'];
                        }

                            $tung_trang = ($trang -1)*$sp_tungtrang;
                            $sql="SELECT * FROM wp_sanpham  ORDER BY idsp Desc LIMIT $tung_trang,$sp_tungtrang";
                            $query = mysqli_query($link,$sql);
            
                    ?>
                    <?php
		                    while($bien = mysqli_fetch_array($query)){
	                    ?>

                    <ul>
                        <li><img width="150px" height="200px" src="images/<?php echo $bien['hinhanh']; ?>">
                            <p><?php echo $bien['tensp']; ?></p>
                            <p><b style="color: red;"><?php echo number_format($bien['gia']).' VNÐ'?></b> <i> -40%</i><br>
                                <s>89.000đ</s>
                            </p>
                            <a href="GiỏHàng/ThemGioHang.php?idsp=<?php echo $bien['idsp']; ?>"><input
                                    style="color:white;background-color:#009933;border-color:#009933;font-size:15px;margin-left:30px;" type="submit"
                                    value="Thêm Giỏ"></a>
                        </li>
                    </ul>
                    <?php 
                        }
                    ?>
     
                </div>
                <br>
                <div class="clearfix"></div>
                <div class="phantrang">
                   <?php

                        $select = "select sp.idsp,sp.tensp,sp.hinhanh,sp.gia from wp_sanpham as sp,wp_khohang as kh where idsp = kh.id and kh.soluongmua > 0";
	                    $query = mysqli_query($link,$select);
 
                        $product_count = mysqli_num_rows($query);
                        $product_button = ceil($product_count/6);
                        $i=1;
                        
                        echo '<i style="font-size:21px;padding-left:520px;color:#A2007C;">Trang : </i> ';
                        for($i=1;$i<=$product_button;$i++)
                        {         
                            echo  '<a style="margin :0 5px;color:red;font-size:22px;text-decoration:none;" href="index.php?trang='.$i.'">'.$i.'</a>'  ;
                        }
                    ?>
                    </div>
            </div>
            
        </div>
    </div>
    <div class="khung10">
        <img width="170px" src="Ảnh/Anh33.pnj.jpg">
        <p style="color: white; font-size: 17px;">
            <strong style="font-size: 20px;">Bạn Đắt Giá Bao Nhiêu ?</strong><br>
            <u>Vãn Tình</u><br><br>
            Nhà xuất bản Trẻ giới thiệu đến Quý vị sách mới của Vãn Tình, một trong những tác giả
            có <br> sách bán chạy hàng đầu Việt Nam. Được nhiều độc giả biết đến qua các tựa sách bán chạy <br>
            như: Khí Chất Bao Nhiêu , Hạnh Phúc Bấy Nhiêu ; Không Tự Khinh Bỉ Không Tự Phí và <br> Lấy Tình Thâm Mà Đổi
            Đầu Bạc…<br>
            --------------------------------------------------------------------------------------------------------------
            <img style="padding-right: 80px;" src="Ảnh/AnhSale.jpg"> <s style="font-size: 21px;">99.000đ</s><span
                style="padding-left: 80px;font-size: 21px;">59.000đ</span>
            <a href="dangnhap.php"><span style="padding-left: 203px;"><input style="height: 29px;" type="button"
                        value="Mua ngay"></span></a>
        </p>
    </div>
    <span>
        <div class="khung111"><br>
            <b style="font-size: 19px; padding-left: 10px;">Sách Mới Nhập Về </b>

            <ul style="padding-left: 0px;">
                <img width="60px" height="80px" style="padding-right:15px;" src="Ảnh/Anh35.pnj.jpg">
                <a href="dangnhap.php">
                    <li>Lập Trình Quỹ Đạo Cuộc Đời <br><br>
                        <b style="color: red;">88.983đ</b> <i> -36%</i><br>
                        <s>140.000đ</s>
                    </li>
                </a>
            </ul>

            <ul style="padding-left: 0px;">
                <img width="60px" height="80px" style="padding-right:15px;" src="Ảnh/Anh34.pnj.jpg">
                <a href="dangnhap.php">
                    <li>Cân Bằng Cảm Xúc ,Cả Lúc Bão Giông<br>
                        <b style="color: red;">67.100đ</b> <i> -30%</i><br>
                        <s>96.000đ</s>
                    </li>
                </a>
            </ul>

            <ul style="padding-left: 0px;">
                <img width="60px" height="80px" style="padding-right:15px;" src="Ảnh/Anh33.pnj.jpg">
                <a href="dangnhap.php">
                    <li>Bạn Đắt Giá Bao Nhiêu ?<br><br>
                        <b style="color: red;">66.642đ</b> <i> -33%</i><br>
                        <s>99.000đ</s>
                    </li>
                </a>
            </ul>
        </div>
    </span>

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
                <td rowspan="4"><br> <img src="Ảnh/Anh37.pnj.png"></td>
                <td rowspan="2"> <br><a href="https://www.facebook.com/"><img width="25" src="Ảnh/AnhFB.pnj.jpg"></a>
                    <a style="padding-left: 10px;" href="https://www.youtube.com/"><img width="25" height="27px"
                            src="Ảnh/Anh38.pnj.jpg"></a>
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
                            src="Ảnh/Anh39.pnj.png"></a> <br>
                    <a href="https://play.google.com/store"><img width="120px" src="Ảnh/Anh40.pnj.png"></a>
                </td>
            </tr>
            <tr>
                <td>Phương thức vận chuyển</td>
                <td>Điều khoản sử dụng</td>
                <td></td>
                <td rowspan="3"><img src="Ảnh/Anh41.pnj.png" alt=""></td>

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
                <td></td>
                <td style="color:red;font-size:18px;">Số lượt truy cập : <?php echo $fr?></td>
            </tr>
            <tr>
                <td>Hỗ trợ khách hàng hotro@mây.vn</td>
                <td>Bán hàng doanh nghiệp</td>
            </tr>
            <tr>
                <td>Báo lỗi bảo mật security@mây.vn</td>
            </tr>
        </table><br><br>
        <div class="clearfix"></div>
        <br>
        <div class="khungEnd1">
            <p><b style="padding-left: 335px;">THƯỜNG ĐƯỢC TÌM KIẾM</b></p>
            <table>
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


    <script>
    var arr = [
        'Ảnh/Anh20.pnj.jpg',
        'Ảnh/Anh6.pnj.jpg',
        'Ảnh/Anh7.pnj.jpg',
        'Ảnh/Anh4.pnj.jpg',
    ];

    var currentIndex = 0;

    function slideshow() {
        document.getElementById('slide-show').src = arr[currentIndex];
        currentIndex++;

        if (currentIndex == arr.length) {
            currentIndex = 0;
        }
        setTimeout("slideshow()", 1000);
    }
    slideshow();


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

        imgSlide[n].style.display = "inline";
    }
    </script>
</body>

</html>