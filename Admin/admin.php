<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignAdmin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper" style="width:1200px;">
        <div class="header">Quản Lý MâyBook</div>
        <div class="main">
            <div class="menu" style="width:1200px;">
                <ul>
                    <li><a href="admin.php">Trang Chủ</a></li>
                    <li><a href="admin.php?Quanly=chamcong">Chấm Công</a></li>
                    <li><a href="admin.php?Quanly=menu">Menu</a></li>
                    <li><a href="admin.php?Quanly=danhmuc">Danh Mục</a></li>
                    <li><a href="admin.php?Quanly=sanpham">Sản Phẩm</a></li>
                    <li><a href="admin.php?Quanly=hoadon">Hóa Đơn</a></li>
                    <li><a href="admin.php?Quanly=binhluan">Bình Luận</a></li>
                    <li><a href="admin.php?Quanly=taikhoan">Tài Khoản</a></li>
                    <li><a href="admin.php?Quanly=khohang">Kho Hàng <img style="width:13px; height:13px;" src="../Ảnh/adc.gif" alt=""> </a></li>
                    <li><a href="admin.php?Quanly=loinhuan">Lợi Nhuận</a></li>
                    <li><a href="admin.php?Quanly=lairong">Lãi Ròng</a></li>
                    <li><a style="color: yellow" href="../dangnhap/logout.php">Thoát</a></li>
                </ul>
            </div>
            <div class="content"style="margin-left:150px;"><?php require("content.php"); ?></div>
        </div>
    </div>
</body>

</html>