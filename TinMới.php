<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu</title>
    <link rel="stylesheet" href="TinMới.css">
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
            <h1 style="text-align: center;">Nick Vujicic trở lại Việt Nam trong đêm “Gala tỏa sáng nghị lực Việt”</h1>
            <p>
            <img style="padding-left: 150px;" src="../Ảnh/unnamed.jpg" alt="" width="70%" height="auto">
            <br>
            <p>
            <h2 style="padding-left: 15px;">Tin Tức, Nội Dùng</h2>
            <ol>
                <li>Tin Tức
                    <p> (HNMO)- Chàng trai đặc biệt Nick Vujicic sẽ có mặt trong chương trình “Gala tỏa sáng nghị lực Việt” diễn ra tại Sân vận động Quốc gia Mỹ Đình, Từ Liêm, Hà Nội vào đêm 24/5/2014. Đây là lần thứ 2 chàng diễn ra không chân không tay Nick Vujicic đến Việt Nam. Trong lần trở lại này, Nick Vujicic đi cùng gia đình mình. .
                <li>Nội Dùng
                    <p>- Chương trình sẽ được truyền hình trực tiếp vào 20h trên kênh VTV1, Đài truyền hình Việt Nam. Được biết, trước khi đêm “Gala tỏa sáng nghị lực Việt” diễn ra tại Hà Nội, chương trình đã diễn ra một đêm trước đó tại Nhà thi đấu thể dục thể thao Phú Thọ, Thành phố Hồ Chí Minh vào đêm 21/5/2014.
                    Chương trình Tỏa sáng nghị lực Việt do Trung ương Hội liên hiệp Thanh niên Việt Nam, Đài truyền hình Việt Nam – Ban Thanh thiếu niên VTV6, Báo Thanh niên và Tập đoàn Hoa Sen phối hợp thực hiện. Chương trình được tổ chức nhằm phát hiện và tôn vinh những tấm gương nghị lực điển hình, biết đối diện và vượt qua những rào cản để vươn lên trong cuộc sống, có những đóng góp tích cực trong cộng đồng.

                    <p>- Tại đêm Gala, 21 tấm gương nghị lực điển hình được chọn trong cuộc thi viết “Gương nghị lực phi thường” đã được tôn vinh và hội ngộ. Thông qua những câu chuyện có thật về những con người nghị lực, chương trình Tỏa sáng nghị lực Việt đã góp phần đánh thức những giá trị sống tốt đẹp trong mỗi con người Việt Nam với 3 thông điệp: sống trung thực, sống trách nhiệm, sống nghị lực. Những giá trị sống tốt đẹp này vốn sẵn có trong mỗi con người Việt Nam, tuy nhiên do những tác động của hoàn cảnh sống, có thể bị lu mờ. Do đó, những thông điệp mà chương trình muốn truyền tải trở nên rất cần thiết trong thời điểm hiện nay, khi thanh niên cần một động lực để phát triển và một niềm tin để hành động. Trong chương trình Gala Tỏa sáng nghị lực Việt được tổ chức tại Hà Nội, những thông điệp của chương trình được truyền tải bằng những thủ pháp nghệ thuật sân khấu vô cùng độc đáo và ấn tượng.

                    <p>- Với chủ đề “niềm tin”, Gala Tỏa sáng nghị lực Việt tại Hà Nội là chương trình có sự tương tác với khán giả lớn nhất trên Sân vận động Quốc gia Mỹ Đình từ trước đến nay. Thông qua quá trình tương tác đó, khán giả tự tìm thấy câu trả lời và niềm tin cho chính mình. Với tiêu chí: khán giả là nhân vật chính, chương trình Gala sẽ tạo nên một sức hút mạnh mẽ đối với người xem..

                    <p>- Đêm Gala có sự tham gia của các vị khách mời đặc biệt: diễn giả Nick Vujicic cùng gia đình. Tại chương trình, các vị khách mời sẽ chia sẻ những tâm tư, tình cảm và quan điểm về nghị lực sống của con người. Ngoài ra, chương trình còn có sự góp mặt của nhiều nghệ sĩ nổi tiếng, đặc biệt là Michelle Louise Vujicic – em gái Nick Vujicic.
                    <p>- Nghiên cứu, ứng dụng thành tựu khoa học công nghệ tiên tiến, các tiêu chuẩn về xử lý thông tin
                        thư viện và các ứng dụng của công nghệ thông tin vào công tác thư viện.

                    <p>- Cũng tại đêm Gala, Tập đoàn Hoa Sen sẽ trao tặng phần quà 30 triệu đồng/người cho 21 tấm gương nghị lực tham gia chương trình, học bổng trị giá 10 triệu đồng/suất cho 10 sinh viên vượt khó, có thành tích tốt trong học tập. Ngoài ra, các nhà tài trợ của chương trình cũng đã có những phần quà hỗ trợ cho các tấm gương nghị lực nhằm động viên tinh thần, tiếp sức cho những con người có hoàn cảnh đặc biệt.

                    <p>- Qua một năm phát động và triển khai, chương trình Tỏa sáng nghị lực Việt đã nhận được sự quan tâm hưởng ứng nhiệt tình của các tầng lớp trong xã hội, đặc biệt là giới trẻ. Chương trình đã góp phần khơi dậy và tuyên truyền về những giá trị sống tốt đẹp, cần thiết và cốt yếu trong việc hình thành nhân cách của mỗi con người trong thời đại hiện nay.
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