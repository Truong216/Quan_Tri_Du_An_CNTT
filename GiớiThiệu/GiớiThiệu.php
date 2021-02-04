<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu</title>
    <link rel="stylesheet" href="GiớiThiệu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
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
            <a href="../GiỏHàng/GioHang.php"><img width="50" height="50"
                    src="https://cdn.pixabay.com/photo/2015/10/22/16/42/icon-1001596_960_720.png" alt=""></a>

        </div>
        <div class="khung12">
            <a href="../dangnhap.php">Đăng nhập</a>
            <a href="../dangki/dangky.php">| Đăng Ký</a>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="khung121">
        <div class="khug"></div>
        <div class="khung2">
            <ul>
                <li><a href="../index.php">
                        <p><strong>TRANG CHỦ</strong></p>
                    </a></li>
                <li><a href="">
                        <p><strong>GIỚI THIỆU</strong></p>
                    </a></li>
                <li><a href="TinMới.html">
                        <p><strong>TIN MỚI</strong></p>
                    </a></li>
                <li><a href="../HướngDẫn/HướngDẫn.php">
                        <p><strong>HƯỚNG DẪN</strong></p>
                    </a></li>
                <li><a href="../dangnhap.php">
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
	                    include "../connect.php";
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

        <div class="khungMS11">
            <h1 style="text-align: center;">Giới thiệu Trung tâm Thông tin Thư viện, MâyBook</h1>
            <p>
            <h2 style="padding-left: 15px;">Lịch sử và thành viên</h2>
            <ol>
                <li>Lịch sử:
                    <p>Được thành lập vào cuối tháng 4 năm 2020 tức năm năm Canh Tý.
                <li>Thành viên:
                    <p>Nguyễn Tuấn Nghĩa, Đặng trần Quang, Nguyễn Đình Thắng, Nguyễn Danh Hà.
                    <p>
            </ol>
            <br>
            <img style="padding-left: 150px;" src="../Ảnh/unnamed.jpg" alt="" width="70%" height="auto">
            <img style="padding-left: 150px;" src="../Ảnh/thuvi.jpg" alt="" width="70%" height="auto">
            <br>
            <p>
            <h2 style="padding-left: 15px;">Chức năng, nhiệm vụ</h2>
            <ol>
                <li>Chức năng
                    <p> Trung tâm có chức năng thông tin và thư viện, phục vụ công tác đào tạo, nghiên cứu khoa học,
                        truyền bá pháp lý, tư vấn pháp luật và quản lý của Nhà trường thông qua việc thu thập, khai
                        thác, sử dụng các nguồn thông tin và tài liệu tại Trung tâm và các thư viện khác (nếu có hợp
                        tác, liên kết) góp phần thực hiện tốt nhiệm vụ chính trị của Nhà trường.
                <li>Nhiệm vụ
                    <p>- Tham mưu cho Hiệu trưởng việc xây dựng quy hoạch, kế hoạch phát triển công tác thông tin thư
                        viện dài hạn và ngắn hạn; tổ chức và điều phối toàn bộ hệ thống thông tin, tư liệu, thư viện
                        trong Nhà trường.

                    <p>- Bổ sung, phát triển nguồn lực thông tin trong nước và nước ngoài đáp ứng nhu cầu giảng dạy, học
                        tập, nghiên cứu khoa học và tư vấn pháp luật; thu nhận, lưu trữ và phổ biến các tài liệu của
                        Trường như: đề tài nghiên cứu khoa học đã được nghiệm thu, tài liệu hội thảo, chương trình đào
                        tạo, giáo trình, tập bài giảng, khoá luận, luận văn thạc sĩ, luận án tiến sĩ và các dạng tài
                        liệu khác; các ấn phẩm tài trợ, tặng biếu, tài liệu trao đổi giữa các thư viện.

                    <p>- Tổ chức xử lý, sắp xếp, lưu trữ, bảo quản, quản lý tài liệu và thông tin; xây dựng hệ thống tra
                        cứu thông tin hiện đại, thiết lập mạng lưới truy cập và tìm kiếm thông tin tự động hóa; xây
                        dựng, quản lý các cơ sở dữ liệu, các bộ sưu tập; biên soạn các ấn phẩm thông tin theo quy định
                        của pháp luật.

                    <p>- Tổ chức tập huấn người dùng tin, chỉ dẫn, kiểm tra, kiểm soát bạn đọc tiếp cận, khai thác, sử
                        dụng có hiệu quả các nguồn thông tin và tài liệu, các sản phẩm và dịch vụ thông tin thư viện.

                    <p>- Nghiên cứu, ứng dụng thành tựu khoa học công nghệ tiên tiến, các tiêu chuẩn về xử lý thông tin
                        thư viện và các ứng dụng của công nghệ thông tin vào công tác thư viện.

                    <p>- Tổ chức, quản lý cán bộ, tài sản theo sự phân cấp của Hiệu trưởng; bảo quản, kiểm kê định kỳ
                        vốn tài liệu, cơ sở vật chất kỹ thuật và các tài sản khác; tiến hành thanh lý các tài liệu,
                        thiết bị lạc hậu, cũ nát theo quy định của Nhà nước và quy định của Trường.

                    <p>- Mở rộng hợp tác với các cơ quan, tổ chức trong nước và quốc tế về lĩnh vực thông tin thư viện;
                        tham gia các hoạt động chuyên môn nghiệp vụ với hệ thống thư viện trong cả nước nhằm thúc đẩy
                        phát triển sự nghiệp thư viện; liên kết, hợp tác với các thư viện luật trong và ngoài nước để
                        phối hợp bổ sung và trao đổi tài liệu, chia sẻ nguồn lực thông tin, dữ liệu biên mục, tổ chức
                        dịch vụ mượn liên thư viện, dịch vụ cung cấp thông tin qua mạng theo quy định của pháp luật và
                        quy định của Trường.

                    <p>- Thực hiện báo cáo định kỳ và báo cáo đột xuất về tình hình hoạt động của Trung tâm với Ban Giám
                        hiệu và cấp có thẩm quyền theo các quy định hiện hành.
            </ol>
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
    </div>
</body>

</html>