<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 2 </title>  
    <style type="text/css">
   table,h2,h3 {
    background: maroon; 
    color: white; 
   }
   </style>
 </head>
 <body background = "img/labfon.png" link="#FFD35F" vlink="#DBD7D2" > 
	<center>
	<h2><a href ="index.php">Лаб 1 <a><a href ="lab_2.php"> Лаб 2 <a><a href ="lab_3.php"> Лаб 3 <a><a href ="lab_4.php"> Лаб 4<a></h2><br>
		<h2>Вивести впорядковані за зростанням суми кредиту й обчислити загальну суму кредиту, що взяли клієнти банку.</h2>

<?php
function ReadFile1() {
            $arr = array();
            $file = fopen("text.txt", "r");
            if ($file) {
                while (!feof($file)) {
                    $text = fgetss($file);
                    $arr[] = explode("	", $text);
                }
                fclose($file);
                return $arr;
            }
            return NULL;
        }
$arr = ReadFile1();
$AllSum=0;
foreach ($arr as $key => $row) {
    $sums[$key]  = $row[5];
    $AllSum+=$row[5]; 

}
array_multisort($sums,SORT_ASC, $arr);
echo "<br>";
         echo "<center><table border = 1>"; 
         echo "<tr><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>";   
            $i = 0;
            if ($arr) {
                foreach ($arr as $keyLine => $line) {
                    echo "<tr>";
                    foreach ($line as $keyElem => $value) {
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            }
      echo "<tr><td colspan=7 align=center>Сумма усіх кредитів = $AllSum</td></tr>";      
   echo "</table></center>"; 
	?>
	</center>
</body>
</html>
