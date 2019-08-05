<?php
# Challenge
/*
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.

# Requirements
* PHP 7
* Maximum of 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
 *
 */

$list = array();
for ($i= 1; $i<=100; $i++){
    $list[] = $i;
}

for ($j = 3; $j<=100; $j = $j+3){
    $list[$j-1] = 'Linio';
}

for ($k = 5; $k<=100; $k= $k+5){
    $list[$k-1] = 'IT';
}

echo "Final List is below : <br/>";
foreach($list as $key => $val){
    $keyIndex = $key +1;
    if( $keyIndex % 3==0 && $keyIndex % 5==0){
        $list[$key]= 'Linianos';
    }
    echo $list[$key]."<br/>";
}
