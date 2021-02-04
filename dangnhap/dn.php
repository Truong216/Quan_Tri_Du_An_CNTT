<?php
session_start();
include("connect.php");
if(isset($_POST['login']))
{
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	
    $sql_check = mysqli_query($link,"select * from wp_dangnhap where user = '$username'");
	$dem = mysqli_num_rows($sql_check);


	//$id= $dem['user'];
    if($dem == 0)
    {
        //$_SESSION['thongbaolo'] = "Tài khoản không tồn tại";
		echo "
							<script language='javascript'>
								alert('Tài khoản không tồn tại');
								window.open('../dangnhap.php','_self', 1);
							</script>
						";
    }
    else
    {
        $sql_check2 = mysqli_query($link,"select * from wp_dangnhap where user = '$username' and pass = '$password'");
        $dem2 = mysqli_num_rows($sql_check2);
        if($dem2 == 0)
			echo "
							<script language='javascript'>
								alert('Mật khẩu không chính xác ');
								window.open('../dangnhap.php','_self', 1);
							</script>
						";
        else
        {
            $row = mysqli_fetch_array($sql_check2);
            
                $_SESSION['user'] = $username;
				$_SESSION['phanquyen'] = $row['phanquyen'];
				$_SESSION['idnd'] = $row['idnd'];
				$id=$row['idnd'];
			
				$pq=$row['phanquyen'];
			
                if($_SESSION['phanquyen'] ==0)
					{
						
						echo "
							<script language='javascript'>
								alert('Ðang nhập thành công');
								window.open('../admin/admin.php?idnd=$id','_self', 1);
							</script>
						";
					}
                else
                {
                   
                   echo "
							<script language='javascript'>
								alert('Ðang nhập thành công');
								window.open('../Dadangnhap.php?pq=$pq','_self', 1);
							</script>
						";
                }
            }
        }
    }

?>