<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 2 </title>  
  <link href="css/style.css" rel="stylesheet">
 </head>
 <body id ="back"> 
	<center>
        <?
       include 'srcfile\headers.php';
      ?>
	<form action="" method="post">
		<table>	

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

	<?
     include 'srcfile\readTable.php';      

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
