<?php


function dbConnect(){
$lnk = mysql_connect('localhost', 'root', '')
       or die ('Not connected : ' . mysql_error());
   mysql_select_db('bank', $lnk) or die("Could not select database".mysql_error() ); 
}

function selectAll(){

	$query = "SELECT * FROM klient";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
 
    print "<table border='1'>\n";
     print "<tr><td>Id</td><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>"; 
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";
}

function insert(){

	include 'srcfile\validate.php';

	if(isset($_POST['submit'])){
       if (isValid()==true){
		$query = "INSERT INTO klient (`surname`, `name`, `adress`, `datebirdth`, `sex`, `creditsum`, `number`) VALUES  ('".$_POST["surname"]."','".$_POST["name"]."','".$_POST["adress"]."','".$_POST["datebirth"]."','".$_POST["sex"]."','".$_POST["creditsum"]."','".$_POST["number"]."')";	
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
    }
	}
}
function sortBy(){
	 $qr_result = mysql_query("select * from klient order by creditsum asc")
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
     $fsum= mysql_query("SELECT SUM(creditsum) FROM klient;")  or die (mysql_error());
  $sum=mysql_result($fsum,0); 
  echo "<h2>Сумма усіх кредитів = $sum<h2>"; 
}

function selectNum(){
    $qr_result = mysql_query("select * from klient where number regex")
      or die(mysql_error());
}


?>