<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 7</title>
</head>
<body>
	<?php 
	
	// function VowelCount($string) {
	// 	return substr_count($string, 'a') + substr_count($string, 'i') + substr_count($string, 'o') + substr_count($string, 'u');//substr_count():đếm số lần xuất hiện chuỗi con trong chuỗi nào đó
	// }
	// echo VowelCount("This is some text u");
	//cách 2:Sử dụng biểu thức chính quy

	function VowelCount($string) {
		preg_match_all('/[aeiou]/i', $string, $matches);
		return count($matches[0]);
	}
	$test = "This is some text u";
	echo VowelCount($test);

?>
</body>
</html>