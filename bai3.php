<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai3</title>
</head>
<body>
<?php 
	
	$number = array('1','2','3','4','5','6','7','8','9','0');
	function Number($number) {

		$str_num = join($number);// nối các phần tử của mảng thành 1 chuỗi
		return '('.substr($str_num,0,3) .')' .substr($str_num, 3, 3). '-' . substr($str_num, 6);
	}
 	echo Number($number);

 ?>
</body>
</html>