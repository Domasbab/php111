<?php

echo '<pre>';

echo '<h1>Rekusija</h1>';

function recursive()


$mas = [5,[4, 2, [8, 9], 78, [87, 37]],[4],8,[87, 96, [8, [98, [2], [69, [45, 47]]]], 66, 7]];

print_r($mas);

$sum = 0;


function getSum(array|int $val) {
    if (is_int($val)) {
        $sum += $val;
    } else {
        foreach($val as $v) {
            getSum($v);
        }
    }
}

getSum($mas);

print_r($sum);