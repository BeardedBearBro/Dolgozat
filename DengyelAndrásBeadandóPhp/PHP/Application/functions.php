<?php
function main($jsonfile)
{
    $array = json_decode($jsonfile, true);

    echo "A tömb elemszáma: ".count($array)."<br>";
    echo "<table>";
    foreach ($array as $key => $value) {
        if($key%5==0) echo "<tr>";
        //echo $key. "=>" . $value. "<br>";
        $elem = array_values($value);
        //echo $elem[0]." ".$elem[1]. "<br>";
        echo "<td><img src='$elem[0]' class='kiskep' title ='$elem[1]'></td>";

        if($key % 5 == 4) echo "</tr>";
    }
    echo "</table>";

}
?>