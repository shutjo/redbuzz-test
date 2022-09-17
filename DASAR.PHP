<?php
// SOAL NO 1
$number = 12346759;

    $array  = array_map('intval', str_split($number));


for($i = 0; $i<count($array); $i++){
	echo $array[$i];   
    for($j=$i; $j<count($array)-1; $j++){
    	echo "0";
	}
    echo "<br>";
   }
?> 

<?php
// SOAL NO 2
    $days = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"); 
    echo "1. " . $days[6] . ", " . $days[5] . ", " . $days[4] . ", " . $days[3] . ", " . $days[2] . ", " . $days[1] . ", " . $days[0] . ".";


    echo "<br/>";
    echo "2. " . $days[1] . ", " . $days[3] . ", " . $days[5] . ".";

    echo "<br/>";
    echo "3. " . $days[6] . ", " . $days[4] . ", " . $days[2] . ", " . $days[0] . ".";

    echo "<br/>";
    echo "4. " . $days[2] . ", " . $days[3] . ", " . $days[5] . ".";
?>


<?php  
// DASAR PHP 3
for ($x = 8; $x <= 65; $x+=3) {
  echo  "$x <br>";
}
?>