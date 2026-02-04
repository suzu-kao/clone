<?php

$people = [
    [
        "name" => "Taro",
        "age" => "25",
        "gender" => "men",
    ],
    [
        "name" => "Jiro",
        "age" => "20",
        "gender" => "men",
    ],
    [
        "name" => "Hanako",
        "age" => "16",
        "gender" => "women",
    ],
];
foreach ($people as $person) {
    $name = $person["name"];
    $age = $person["age"];
    $gender = $person["gender"];

    echo $name . "(" . "$age" . "歳" .  "$gender" . ")" . '<br />'; 
}
echo "<br />";


$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'womwn']
];

foreach ($people as $person) {
    echo $person[0] . '(' .$person[1] . '歳'. $person[2] . ')' . '<br />';
}