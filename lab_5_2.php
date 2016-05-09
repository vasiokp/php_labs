<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторна робота 5_2 </title>  
  <link href="css/style.css" rel="stylesheet"> 
 </head>
 <body>
  <center>  
  <?   
 include 'srcfile\headers.php';

      echo '<h2>Вивести впорядковані за зростанням суми кредиту й обчислити загальну суму кредиту, що взяли клієнти банку.</h2>';
     include 'srcfile\forDatabase.php';
     dbConnect();
      sortBy();

     ?>
          </center>  
 </body>
 </html>