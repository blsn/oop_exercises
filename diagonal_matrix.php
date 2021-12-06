<?php
/*
$sum = 0;
$arr = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$rev = sizeof($arr) - 1;
for ($i = 0; $i <= sizeof($arr) - 1; $i++) {
    $sum += $arr[$i][$i] * $arr[$i][$rev];
    $rev--;
}
echo $sum;
*/


$x = 3; // input array size
$n = $x * $x; // lengh x width
$numArr = array();
$numRow = array();
$j = 0;
for ($i = 1; $i <= $n; $i++) {
    $numRow[$j] = $i;
    $j++;
    if (($i % $x) == 0) {
        array_push($numArr, $numRow);
        $numRow = array();
        $j = 0;
    }
}
echo '<pre>'; var_dump($numArr); echo '</pre>';

$sum = 0;
for ($i = 0; $i < sizeof($numArr); $i++) {
    $sum += $numArr[$i][$i] * $numArr[$i][sizeof($numArr) - ($i+1)];
}
echo $sum; // 1x3 + 5x5 + 9x7 = 91