<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />

    </head>
    <body>
	
	<form action="" method="GET">
		<input type="text" placeholder="Введите строку" size="100" name="line">
		<input type="submit" value="Отправить">
	</form>
<?php

/*реверст строки с сохранением регистра*/
$str=$_GET['line'];
echo "<i>Строка: </i>" . $str."<br>";


function test($str){
	
$result= explode(" ", $str);
foreach ($result as $key => $value) {
      	for ($i=0; $i <= strlen($value); $i++)
    {
		$rev=strrev($value);
        if (ctype_upper($value[$i])){
               $rev[$i]= strtoupper ($rev[$i]); 
        }
        else{
            $rev[$i]= strtolower ($rev[$i]);  			 
        }
        echo $rev[$i];        
    }
   echo " ";
	
}}
test($str);


?>

</body>
</html>