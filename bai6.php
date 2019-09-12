<?php 
	//chuyen chuoi thanh mang
	function MostCommonCharInString($a)
	{
		//chuyen chuoi thanh mang
		$arr = str_split($a);
		$max = 0;
		for($i = 0; $i < count($arr) - 1; $i++) {
			$dem = 0;
			
			for($j = $i + 1; $j < count($arr); $j++) {
				if($arr[$j] == $arr[$i])
				{
					$dem++;
				}
			}
			if($dem > $max) 
			{
				$max = $dem;
				$vitri = $i;
			}
		}
		echo $max + "1";
		echo $arr[$vitri];

	}
	$a = "aadjfkiadd";
	MostCommonCharInString($a);

?>