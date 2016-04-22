<html>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<body>
<table border="1" align="center">
	<tr>
		<th>Назва клубу</th>
	</tr>
<?php
	function ReadFile1() {
            $arr = array();
            $file = fopen("Zapus1.txt", "r");
            if ($file) {
                while (!feof($file)) {
                    $text = fgetss($file);
                    $arr[] = explode("\t", $text);
                }
                fclose($file);
                return $arr;
            }
            return NULL;
        }

if(isset($_POST['sendStr'])){
  	 if((preg_match('/^[^а-я]+$/',$_POST["name_klub"]))){
		$arr = ReadFile1();
			echo "<br>";
            echo "<center><table border = 1>"; 
            echo "<tr><th>Назва клубу</th></tr>";    
            $len = count($arr);       
            	$mask="/\d+[".$_POST['name_klub']."](\d+)?/"; 
            	for($i=0;$i<$len;$i++){
            
            	  if((preg_match($mask,$arr[$i][0]))){
                        echo "<tr>";                   
                        echo "<td>".$arr[$i][0]."</td>";
                        echo "</tr>";
                    }               
                }       
        
   echo "</table></center>"; 
	}else echo "<h3>Неправильно заповненe полe!!!</h3>";
  }

 


	?>
</table>
</body>	
</html>