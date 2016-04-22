<?PHP
    $link = mysql_connect("localhost", "root", "")
        or die("Could not connect: " . mysql_error());
mysql_select_db('c', $link) or die('No database');

function insert_row($title, $year, $students_count, $name, $address)
{
	return mysql_query("INSERT INTO faculties (`id`, `faculty`, `year`, `students_count`, `name`, `address`) VALUES (NULL, '{$title}', '{$year}', '{$students_count}', '{$name}', '{$address}');");
}

function getAll()
{
	$result = mysql_query("SELECT * FROM faculties");
	while ($row = mysql_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function getAllandSort()
{
	$result = mysql_query("SELECT * FROM faculties ORDER BY students_count");
	while ($row = mysql_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function search($pattern)
{
	$result = mysql_query("SELECT * FROM faculties WHERE name LIKE '%{$pattern}%';") or die(mysql_error());

	while ($row = mysql_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function sum()
{
	$result = mysql_query("SELECT sum(students_count) as total_students FROM faculties");
	$row = mysql_fetch_assoc($result);
	return $row['total_students'];
}

?>