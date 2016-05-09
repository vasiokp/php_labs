<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 2 </title>  
  <link href="css/style.css" rel="stylesheet">
 </head>
 <body> 
	<center>
	 <?
       include 'srcfile\headers.php';
      ?>
		<h2>Вивести впорядковані за зростанням суми кредиту й обчислити загальну суму кредиту, що взяли клієнти банку.</h2>

<?php
include 'srcfile\readTable.php'; 
$arr = ReadFile1();
$AllSum=0;
foreach ($arr as $key => $row) {
    $sums[$key]  = $row[5];
    $AllSum+=$row[5]; 
}

array_multisort($sums,SORT_ASC, $arr);
include 'srcfile\printTable.php';
    echo "<h2>Сумма усіх кредитів = $AllSum</h2>"; 
?>
	</center>
</body>
</html>
