<?
$query = "SELECT * FROM klient";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
 
    print "<table border='1'>\n";
     print "<tr><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>"; 
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";
?>