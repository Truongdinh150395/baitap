<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 10</title>
</head>
<body>
	<?php 
	function reverseVowel($str)
{
    $arr = str_split($str);
    $arr_num_vowel = array();
    $arr_vowel = array();
    $vow = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    for ($i=0; $i < sizeof($arr) ; $i++)
    {
        if (in_array($arr[$i], $vow))
        {
            array_push($arr_vowel, $arr[$i]);
            $arr_num_vowel[] = $i; 
        }
    }
    // reverse vowel
    foreach ($arr_num_vowel as $value)
    {
        $arr[$value] = array_pop($arr_vowel);
    }
    return join("",$arr);
}
	$str = "Reverse Vowels In A String";
	echo reverseVowel($str); 
?>
</body>
</html>