
<?php
function num($n, $m) {
    $sum = $n + $m;
    return $sum;
}
$total = num(2, 3);
echo $total;
echo "<br />";


function sum($score1, $score2, $score3) {
    $score = $score1 + $score2 + $score3;
    return $score;
}

$total = sum(80, 80, 80);
if ($total > 210) {
    echo "合格点は⚪︎⚪︎なので合格です";
}
else {
    echo "合格点は⚪︎⚪︎なので合格です";
}
