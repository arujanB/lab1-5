<?php
function top($column, $step){
  	$multi = array(
      	array(1,2,3,4,5),
      	array(2,2,4,5,6),
      	array(7,5,6,4,9),
      	array(5,4,6,7,9),
      	array(1,2,5,6,8));
    
    foreach($multi as $q){
    	foreach($q as $w){
        	echo $w." ";
        }
        echo "<br>";
    }
    echo "<br>";
    $qwer = count($multi)-($step%count($multi));
	$n = $multi;
    
    for($q=0; $q<count($multi); $q++){
    	$n[($q + $qwer) % count($multi)][$column] = $multi[$q][$column];
    }
    foreach($n as $q){
    	foreach($q as $w){
        	echo $w." ";
        }
        echo "<br>";
    }
}
top(2,3);
?>