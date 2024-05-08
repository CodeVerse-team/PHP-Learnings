<?php
//  Arrays are the Variable which can hold more than one value 

$foods = array("Apple","Banana","Melon","Strawberry", "Coconut");

/*  echo $foods[0]. "<br>";
    echo $foods[1]. "<br>";
    echo $foods[2]. "<br>";
    echo $foods[3]. "<br>"; */

$foods[0] = "Pineapple";
array_push($foods, "Chiku", "Kiwi");
array_pop($foods);
// array_shift($foods);

// $reversed_foods = array_reverse($foods);
echo "There are ".count($foods)." Foods in the Basket.<br>";


foreach($foods as $food){
    echo $food. "<br>";
}
