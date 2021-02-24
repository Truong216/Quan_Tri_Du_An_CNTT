<?php
session_start();
include("connect.php");
$mahd=$_GET['mahd'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hóa Đơn</title></head>
<body onLoad="window.print()">
<div id="wrapper" style="margin:0 auto; width:500px;">
<table width="100%">
                <!--DWLayoutTable-->
                <tr>
                  <td height="25" valign="top"align="center"><div align="left">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td width="5" height="95">&nbsp;</td>
                       
                          <td width="343"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tbody>
                                <tr>
                                  <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tbody>
                                        <tr>
                                          <td colspan="2"><h1 style="color:#009900;padding-left:120px;">Nhà Sách ThiênAn.com</h1></td>
                                        </tr>
                                        <br>
                                        <tr>
                                          <td style="padding-left:300px;"><i style="font-size:19px;">Address</i></td>
                                          <td> : Hoài Đức - Hà Nội</td>
                                        </tr>
                                        <tr>
                                        <td style="padding-left:300px;"><i style="font-size:19px;">Tel:</td>
                                          <td>: 0123456789</td>
                                        </tr>
                                        <tr>
                                        <td style="padding-left:300px;"><i style="font-size:19px;">Phone </td>
                                          <td>: 0123456789</td>
                                        </tr>
                                        <tr>
                                        <td style="padding-left:300px;"><i style="font-size:19px;">Email</td>
                                          <td>: maybook@gmail.com</td>
                                        </tr>
                                      </tbody>
                                  </table></td>
                                </tr>
                              </tbody>
                          </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
                </tr>
                <tr>
                  <td width="590" height="25" valign="top"align="center">  <hr>
                  <br><br>
                    <strong><font color="#FF0000" size="+2" style="padding-left:20px;font-size:30px;">Đơn Hàng Tình Yêu</font></strong> <br>
                    <?php		
                            $sql1="select * from wp_hoadon where mahd='$mahd'";
                            $rows1=mysqli_query($link,$sql1);
                            $row1=mysqli_fetch_array($rows1);
                    ?>
                    <b style="padding-left:20px;font-size:16px;color:#0000CD">MãHĐ : <?php echo $row1['mahd'];?> </b></td>
                  
              </tr>
                <tr>
                  <td height="54"  >                    
                      <div align="left">
                        <br>
                        <b>Thông tin Khách hàng:</b></div><br>
              <table width="100%" >
                            <tr>
                              <td width="3%" >&nbsp;</td>
                              <td width="34%" >Họ tên:</td>
                              <td width="63%" >  <?php echo $row1['hoten'];?>   </td>
                            </tr>
                            <tr>
                              <td >&nbsp;</td>
                              <td >Địa chỉ :</td>
                              <td >   <?php echo $row1['diachi'];?>      </td>
                            </tr>
                            <tr>
                              <td >&nbsp;</td>
                              <td >Điện thoại :</td>
                              <td >   0<?php echo $row1['dienthoai'];?></td>
                            </tr>
                          
                            <tr>
                              <td>&nbsp;</td>
                              <td>Email : </td>
                              <td >    <?php echo $row1['email'];?> </td>
                            </tr>

                            <tr>
                              <td >&nbsp;</td>
                              <td >Ngày đặt hàng:</td>
                                    
			
                              <td ><?php echo $row1['ngaydathang'];?></td>
                </tr>
                                                        <tr>
                                                          <td >&nbsp;</td>
							   <?php		
								$sql2="select * from wp_cthoadon where mahd='$mahd'";
								$rows2=mysqli_query($link,$sql2);
								$row2=mysqli_fetch_array($rows2);
								
								?>
          
                            </tr>
                    </table>
        <br />
                          <span class="style3"><b>Thông tin về Đơn Hàng : </b> <br><br></span>
                          <table width="100%" style="border-collapse:collapse;">
                            <tr>
                              <td width="30%" bgcolor="#CCCCCC"  align="left" style="border:1px solid green;"><div align="center">Tên hàng</div></td>
                              <td width="25%" bgcolor="#CCCCCC"  align="left" style="border:1px solid green;"><div align="center">Giá</div></td>
                              <td width="5%" bgcolor="#CCCCCC"  align="left" style="border:1px solid green;"><div align="center">Số lượng</div></td>
                              <td width="25%" bgcolor="#CCCCCC"  align="left" style="border:1px solid green;"><div align="center">Thành Tiền</div></td>
                            </tr>
                          <?php
   $stt=1;
	$tong=0;
	$sql="select * from wp_cthoadon where mahd='$mahd'";
	$rows=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($rows))
	{
	  $tong+=$row['thanhtien'];
	
	?>
        <tr>
          <td  align="left" style="border:1px solid green;"><div align="center"><?php echo $row['tensp']?></div></td>
          <td align="center" align="left" style="border:1px solid green;"><?php echo number_format($row['gia'],"0",",",".")?> VNĐ</td>
          <td align="center"  align="left" style="border:1px solid green;"><?php echo $row['soluong']?></td>
          <td align="center" align="left" style="border:1px solid green;"><?php echo number_format($row['thanhtien'],"0",",",".")?> VNĐ</td>
        </tr>
		<?php } ?>   
        <tr style="border:1px solid green;">
          <td colspan="3" align="left"><div align="left" style="padding-left:20px;"><b>Tổng giá trị đơn hàng :</b></div></td>
          <td align="right" style="padding-right:33px;" ><b><?php echo number_format($tong,"0",",",".") ?> VNĐ</b></td>
        </tr>     
      </table>
		  <br>
              <table width="550" border="0" align="right">
                            <tr>
                              <td><div> <i style="padding-left:35px;"> Ngày Giao : <?php echo date("d/m/Y");?></i> <br><b><?php echo $row1['diachi'];?></b>
                              </div></td>
                              <td><div><b style="padding-left:150px;"> Nhân viên Bán hàng</b> <br> <br><i style="padding-left:200px;"><?php echo $row1['manv'];?></i>
                              </div></td>
                            </tr>
                            <tr>
                              
                            </tr>
                            <tr>
                              <td height="23"><div align="center"></div></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="73">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                           
                          </table>
                    <p>&nbsp;</p>
	                      <p><br>
                                      </p>
                    </td>
                </tr>
              </table>
</div>
</body>
</html>
