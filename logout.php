<?php 
session_start(); 
unset($_SESSION['phanquyen']);
unset($_SESSION['user']);
unset($_SESSION['idnd']);


echo "
							<script language='javascript'>
								alert('Thoát  thành công');
								window.open('../index.php','_self', 1);
							</script>
						";
?>