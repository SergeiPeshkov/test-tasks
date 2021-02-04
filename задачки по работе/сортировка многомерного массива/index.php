<?php

$clinic_list=array(
	array(
		'id'=>'36183',
		'title'=>'Многопрофильный центр',
		'addres'=>'Семашко, 4',
		'que'=>'3'),
	
	array(
		'id'=>'38762',
		'title'=>'Детская клиника',
		'addres'=>'пр. Победы, 4',
		'que'=>'1')	,
	array(
		'id'=>'36238',
		'title'=>'Центр зрения',
		'addres'=>'Киевская 153Б',
		'que'=>'2')	,
		
);

function cmp($a, $b)
{
    return strcmp($a["que"], $b["que"]);
}

usort($clinic_list, "cmp");

foreach ($clinic_list as $clinic){
	echo $clinic['title']."<br>";
	
};

?>