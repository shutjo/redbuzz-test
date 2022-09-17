<?php
// LOGIC NO 1
$x =  [1, 5, 6, 1, 0, 1];
$y = 6;

for ($i = 0; $i < $y; $i++) {
	for ($j = 0; $j < $y; $j++) {
    if ($x[$i]+$x[$j] == $y) {
    	echo "[",$x[$i],",",$x[$j],"]";
        echo " ";
    }
  }
}
?>  

<?php  

// LOGIC NO 2

$x = [3, 2];
$b = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

for($i = 0; $i< count($b); $i++){
        for($j = 0; $j< $x[0]; $j++){
			echo $b[$i];
            if($j!=$x[0]-1){
            	echo ",";
            }
            $i++;
        }
        echo "-----------";
        for($k = 0; $k< $x[1]; $k++){
			echo $b[$i];
            if($k!=$x[1]-1){
            	echo ",";
            }
            $i++;
        }
        $i--;
        echo "<br>";
    }
?>  