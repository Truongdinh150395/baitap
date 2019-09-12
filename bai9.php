<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 9</title>
</head>
<body>
	<?php 
	
	
	function ArrayExchangeAndReversing(&$my_arr, &$other_arr) {
		//tham chiếu &
		$new_myArr = array();
		$new_otherArr = array();
		//nếu mảng my_arr không rỗng thi loại bỏ phần tử cuối cùng của mảng my_arr và thêm nó vào mảng mới $new_otherArr.
		while (!empty($my_arr)) {
			array_push( $new_otherArr, array_pop($my_arr));
		}
		
		while (!empty($other_arr)) {
		 array_push($new_myArr, array_pop($other_arr));
		}
		$my_arr = $new_myArr;
		$other_arr = $new_otherArr;
	}
	$my_arr = array("Volvo", "BMW", "Toyota");
	$other_arr = array("35", "37", "43");
	ArrayExchangeAndReversing($my_arr, $other_arr);
	print_r($my_arr);
	echo "<br>";
	print_r($other_arr);

?>
</body>
</html>