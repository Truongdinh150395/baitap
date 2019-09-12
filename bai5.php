<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	
	function Numbersinstrings($str) {
		
		 $arr = str_split($str);
		    $str_arr = array();
		    $num = "";
		    for ($i=0; $i < sizeof($arr) ; $i++)
		    {
		        if ((is_numeric($arr[$i])) && (isset($arr[$i+1])) &&(!is_numeric($arr[$i+1])))
		        {
		            
		            $num .= $arr[$i];
		            array_push($str_arr, (int)$num);
		            $num = "";//khởi tạo lại số bằng 0 để lưu giá trị mới
		        } elseif (is_numeric($arr[$i]))
		        {
		            $num .= $arr[$i];
		        }
		    }
		    rsort($str_arr);
		    return $str_arr[0];

	}
	$so = "gh12cdy695m1";
 	echo Numbersinstrings($so);

 ?>
</body>
</html>