<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 2 </title>  
 <link href="css/style.css" rel="stylesheet">  
 </head>
 <body> 
	<center>	
<?php
include 'srcfile\headers.php';      
include 'srcfile\form.html';
include 'srcfile\readTable.php';       
include 'srcfile\validate.php';
if(isset($_POST['submit'])){
  if (isValid()==true){
      $file=fopen("text.txt", "a");
      fputs($file, $_POST["surname"]."\t".$_POST["name"]."\t".$_POST["adress"]."\t".$_POST["datebirth"]."\t".$_POST["sex"]."\t".$_POST["creditsum"]."\t".$_POST["number"]); 
      fputs($file,"\n"); 
      fclose ($file);
    }else{
      echo "<h3>Неправильно заповнені поля!</h3>";
    }
}

$arr=ReadFile1();     
include 'srcfile\printTable.php';
	?>
	</center>
</body>
</html>
