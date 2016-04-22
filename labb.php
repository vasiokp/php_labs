<?php
// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
echo 'Соединение успешно установлено';
mysql_select_db('bank') or die('Не удалось выбрать базу данных');
// Выполняем SQL-запрос
function insert_row()
{echo"Good1";
	return mysql_query("INSERT INTO klient (`id`, `surname`, `name`, `adress`, `datebirdth`, `sex`,'creditsum','number') VALUES (NULL, '1', '2', '3', '4', 'address','7',13123);");
}
$aa="INSERT INTO  `klient` (   `surname` ,  `name` ,  `adress` ,  `datebirdth` ,  `sex` ,  `creditsum` ,`number` ) VALUES (   '2s',  'ss',  'sss',  'ssss',  'sssss', 7, 7 )";

$qw="INSERT INTO klient (`id`, `surname`, `name`, `adress`, `datebirdth`, `sex`,'creditsum','number') VALUES (2, 'asd', 'asdas', 'sa', 'ss', 'address',31,13123)";
mysql_query($aa);
echo"Past";
$query = 'SELECT * FROM klient';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysql_free_result($result);

// Закрываем соединение
mysql_close($link);
?>
