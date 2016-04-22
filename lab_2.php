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
<?php
include 'srcfile\form.html';
        


if(isset($_POST['submit'])){
  	 if((preg_match("/^[A-Z][a-z]+$|^[ЙЦУКЕНГШЩЗХЭЖДЛОРПАВЫФЯЧСМИТЬБЮІЇЄ][йцукенгшщзхъэждлорпавыфячсмитьбюіїє]+$/",$_POST["surname"]))&&(preg_match("/^[A-Z][a-z]+$|^[ЙЦУКЕНГШЩЗХЭЖДЛОРПАВЫФЯЧСМИТЬБЮІЇЄ][йцукенгшщзхъэждлорпавыфячсмитьбюіїє]+$/",$_POST["name"])) && (preg_match("/^[A-Za-z.]+$|^[А-Яа-я.]+$/",$_POST["adress"])) && (preg_match("/^[1-9][0-9]+$/", $_POST["creditsum"])) && (preg_match("/^[0-9]+/", $_POST["number"]))) {
   	  $file=fopen("text.txt", "a");
  	  fputs($file, $_POST["surname"]."\t".$_POST["name"]."\t".$_POST["adress"]."\t".$_POST["datebirth"]."\t".$_POST["sex"]."\t".$_POST["creditsum"]."\t".$_POST["number"]); 
   	  fputs($file,"\n"); 
   	  fclose ($file);

	}else echo "<h3>Неправильно заповнені поля!</h3>";
  }
              
include 'srcfile\readprintTable.php';
	?>
	</center>
</body>
</html>
