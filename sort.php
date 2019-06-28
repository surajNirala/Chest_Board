<?php 

$inputArray = array(8, 2, 7, 4, 5);
    $outArray = array();
    for($x=1; $x<=100; $x++) {
        if (in_array($x, $inputArray)) {
            array_push($outArray, $x);
        }
    }
print_r($outArray);



//SELECT address, count(id) as cnt FROM list
//GROUP BY address HAVING cnt > 1 
?>
