<?php 

$inputArray = array(8, 2, 7, 4, 5);
    $outArray = array();
    for($x=1; $x<=100; $x++) {
        if (in_array($x, $inputArray)) {
            array_push($outArray, $x);
        }
    }
print_r($outArray);

echo "</br>";
echo "</br>";


echo "Unsorted array is: ";
echo "<br />";
print_r($array);


for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($array);

//SELECT address, count(id) as cnt FROM list
//GROUP BY address HAVING cnt > 1 
?>
