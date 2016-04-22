<?
function ReadFile1() {
            $arr = array();
            $file = fopen("text.txt", "r");
            if ($file) {
                while (!feof($file)) {
                    $text = fgetss($file);
                    $arr[] = explode("	", $text);
                }
                fclose($file);
                return $arr;
            }
            return NULL;
        }
$arr = ReadFile1();
?>