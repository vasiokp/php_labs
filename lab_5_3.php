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
     include 'srcfile\forDatabase.php';
     dbConnect();
  if(isset($_POST['search'])){
     if((preg_match("/^[0-9]+/",$_POST["cifra"]))){
      $sel=$_POST["cifra"];
        $qr_result = mysql_query("select * from klient where number Regexp '[$sel]'")
      or die(mysql_error());
      print "<table border='1'>\n";
     print "<tr><td>Id</td><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>"; 
      
    while ($line = mysql_fetch_array($qr_result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";

    }else echo "fa";
  }


     ?>
          </center>  
 </body>
 </html>