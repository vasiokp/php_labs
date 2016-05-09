<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 5 </title>  
  <link href="css/style.css" rel="stylesheet"> 
 </head>
 <body>
   	<center>	
     <?

     include 'srcfile\headers.php';
     include 'srcfile\form.html';
     include 'srcfile\forDatabase.php'; 
    dbConnect();
     selectAll();
    insert(); 
   // include_once 'srcfile\selectAll.php'; 
     ?>
	</center>	
 </body>
 </html>