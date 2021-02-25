<?php	
		if(isset($_GET["Quanly"]))
		{
			$row = $_GET["Quanly"];
		}
		else
			$row = "";
		if($row == "sanpham") 
		{
			include("sanpham.php");
		}
		elseif($row == "hoadon") 
		{
			include("hoadon.php");
		}
		elseif($row == "inhd") 
		{
			include("inhd.php");
		}
		elseif($row == "khohang") 
		{
			include("khohang.php");
		}
		elseif($row == "danhmuc") 
		{
			include("danhmuc.php");
		}
		elseif($row == "loinhuan") 
		{
			include("loinhuan.php");
		}
		elseif($row == "menu") 
		{
			include("menu.php");
		}
		elseif ($row == "SuaSP") 
		{
			include("Sản Phẩm/Sua.php");
		}
		elseif ($row == "SuaSPtam") 
		{
			include("Sản Phẩm/SuaSPtam.php");
		}
		elseif ($row == "Nhapthem") 
		{
			include("Sản Phẩm/Nhapthem.php");
		}
		elseif ($row == "NhapMoi") 
		{
			include("Sản Phẩm/Nhapmoi.php");
		}
		elseif ($row == "SanPhamTam") 
		{
			include("SanPhamTam.php");
		}
		elseif($row == "XoaSP")
		{
			include("Sản Phẩm/Xoa.php");
		}
		elseif($row == "taikhoan")
		{
			include("taikhoan.php");
		}
		elseif($row == "lairong")
		{
			include("lairong.php");
		}
		elseif($row == "chamcong")
		{
			include("Chamcong.php");
		}
		elseif ($row == "SuaDM") 
		{
			include("Danh Mục/Sua.php");
		}
		elseif ($row == "ThemDM") 
		{
			include("Danh Mục/Them.php");
		}
		
		elseif($row == "XoaDM")
		{
			include("Danh Mục/Xoa.php");
		}
		elseif ($row == "ThemMN") 
		{
			include("Menu/ThemMN.php");
		}
		elseif ($row == "XoaMN") 
		{
			include("Menu/XoaMN.php");
		}
		elseif ($row == "SuaMN") 
		{
			include("Menu/SuaMN.php");
		}
		elseif($row == "cthoadon")
		{
			include("cthoadon.php");
		}
		elseif($row == "XoaCTHD")
		{
			include("Hóa Đơn/Xoacthd.php");
		}
		elseif($row == "XoaHD")
		{
			include("Hóa Đơn/Xoahd.php");
		}
		elseif($row == "binhluan")
		{
			include("binhluan.php");
		}
		elseif($row == "ThemBL")
		{
			include("Bình Luận/Them.php");
		}
		elseif($row == "XoaBL")
		{
			include("Bình Luận/Xoa.php");
		}

?>