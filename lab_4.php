<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 2 </title>  
    <style type="text/css">
   table,h1,h3,h2,link {
    background: maroon; 
    color: white; 
   }
   </style>
 </head>
 <body background = "img/labfon.png" link="#FFD35F" vlink="#DBD7D2" > 
	<center>
	<form action="" method="post">
		<table>	
			<h2><a href ="index.php">Лаб 1 <a><a href ="lab_2.php">Лаб 2 <a><a href ="lab_3.php">Лаб 3 <a><a href ="lab_4.php">Лаб 4<a></h2><br>
		<h2>У форму вводиться набір цифр. Вивести у вікно браузера усіх клієнтів, телефонні номери яких містять задані цифри.</h2>
			    <tr>
					<th>Цифри</th> 
					<th> <input name="cifra" type="text"></th>
				</tr>
				<tr>
					<th colspan="2"><input type='submit' name='search' value='Отправить'>					
					</th>
				</tr>			
    	</table>
	</form>

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

if(isset($_POST['search'])){
  	 if((preg_match("/^[0-9]+/",$_POST["cifra"]))){
		$arr = ReadFile1();
			echo "<br>";
            echo "<center><table border = 1>"; 
            echo "<tr><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>";    
            $len = count($arr);       
            	$mask="/\d+[".$_POST['cifra']."](\d+)?/"; 
            	for($j=0;$j<=$len;$j++){
            
            	  if((preg_match($mask,$arr[$j][6]))){
                        echo "<tr>";                   
                        echo "<td>".$arr[$j][0]."</td><td>".$arr[$j][1]."</td><td>".$arr[$j][2]."</td><td>".$arr[$j][3]."</td><td>".$arr[$j][4]."</td><td>".$arr[$j][5]."</td><td>".$arr[$j][6]."</td>";
                        echo "</tr>";
                    }               
                }       
        
   echo "</table></center>"; 
	}else echo "<h3>Неправильно заповненe полe!</h3>";
  }

 


	?>
	</center>
</body>
</html>
