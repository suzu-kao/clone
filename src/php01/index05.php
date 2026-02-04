<?php
$a = 5;

if ($a === 5) {
    echo '$aは5です';
}

// if else if文
echo "<br />";
$a = 7;
if ($a === 7) {
    echo '$aは7です';
} elseif ($a === 5){
    echo '$aは5です';
}else {
    echo '$aは5でも7でもありません';
}
echo "<br />";

// switch文
$people = 'Saburo';
switch ($people) {
    case  'Taro':
        echo '太郎です';
        break;
    case 'Jiro':
        echo '次郎です';
        break;
    case 'Saburo':
        echo '三郎です';
        break;
}
echo "<br />";
// 三項演算子
$a = 7;
$result = ($a > 5) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";
