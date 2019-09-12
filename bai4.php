<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	
	function backspaceInString($str) {

		$str_arr = str_split($str);
		$arr = array();
		for($i = 0; $i < sizeof($str_arr); $i++) {
			if($str_arr[$i] != "#") {
				//nếu từ so sánh khác "#" thi lưu từ đó vào mảng mới $arr
				array_push($arr, $str_arr[$i]);
			}
			else {
				array_pop($str_arr);
			}
		}
		return join("",$arr);
	}
 	$input = "abc#d##c";
	echo backspaceInString($input);

 ?>
</body>
</html>