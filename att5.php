<?php
 
$fibonacci = [1,1];
for($x=0; $x<8; $x+=1){
 
    array_push($fibonacci,  $fibonacci[count($fibonacci) - 2] + $fibonacci[count($fibonacci) - 1]);
}
 
foreach($fibonacci as $item){
    echo $item . "<br>";
}
?>