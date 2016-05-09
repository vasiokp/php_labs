<?
echo "<br>";
         echo "<center><table border = 1>"; 
         echo "<tr><td>Прізвище</td><td>Імя</td><td>Адреса</td><td>Дата народження</td><td>Стать</td><td>Сума кредиту</td><td>Телефон</td></tr>";   
          if ($arr) {
                foreach ($arr as $keyLine => $line) {
                    echo "<tr>";
                    foreach ($line as $keyElem => $value) {
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            }
   echo "</table></center>"; 

	?>