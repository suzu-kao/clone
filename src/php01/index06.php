<?php
// for文
for ($i = 1; $i <=5; $i++) {
    echo $i * 2;
    echo "<br />";
}
echo "<br />";

// while文
$count = 0;
while ($count < 20) {
    $count += 1;
    echo $count . "<br />";
}
echo "<br />";




// while文
$count = 0;
while ($count <= 100) {
    if ($count == 20) {
        break;
    }
    if($count % 3 === 0) {
        $count++;
        continue;
    };
    echo $count . "<br />";
    $count++;
}

// do while文
$num = 0;
do {
    echo 'num = ' . $num . "<br />";
    $num += 1;
}
    while ($num < 3);

// FizzBuzz問題
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 === 0) {
        echo $FizzBuzz;
    }
    elseif ($i % 3 === 0) {
        echo $Fizz;
    }
    elseif ($i % 5 === 0) {
        echo $Buzz;
    }
    else {
        echo $i;
    }
}

$i = '⚫︎';
while ($i < 5) {
    $i * 5;
    echo $i;
} 
echo $count . "<br />";
    $count++;
echo "<br />";

for ($i = 1; $i < 6; $i++) {
    for ($s = 1; $s < 6; $s++) {
echo "⚫︎" ;
    }
echo "<br / >";
}
