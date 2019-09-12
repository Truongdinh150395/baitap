<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 8</title>
</head>
<body>
	<?php 
	
	
	function AddCommas($so) {
		$str = strstr((string)$so, '.');// strstr lấy các phần tử từ dấu ".";
		return number_format($so,strlen($str)-1, ',', '.');
	}
	echo AddCommas(-1000000.123);

?>
</body>
</html>