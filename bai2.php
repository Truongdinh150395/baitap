<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	function LetterChanges($str) {
		$arr = str_split($str);
		$arr_letter = range("a", "z");
		$vow = array('a', 'e', 'o', 'i', 'u');
		foreach($arr as $key => $value) {
			if (in_array($value, $arr_letter )) {
				$arr[$key] = $value == 'z' ? 'a' : ++$value;
				if(in_array($arr[$key], $vow)) {
					$arr[$key] = strtoupper($arr[$key]);
				}
			}
			else {
				$arr[$key] = $value;
			}
		}
		return join("", $arr);
	}
	$test = "fun times";
	echo LetterChanges("$test");
 ?>

</body>
</html>