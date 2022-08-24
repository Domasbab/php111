<?php

$user = [
['name' => 'bebras', 'pass' =>('123'), 'color' => 'pink'],
['name' => 'bebras', 'pass' =>('123'), 'color' => 'skyblue'],
['name' => 'bebras', 'pass' =>('123'), 'color' => 'black'],
];

file_put_contents('user.json', json_decode($user));