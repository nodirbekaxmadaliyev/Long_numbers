<?php
echo "Assalomu alaykum<br>";
$num = "6845168453164851";
$n = strlen($num);
$l = $n - 1;
while ($l >= 0 &&($num[$l]==='2' || $num[$l]==='4' || $num[$l]==='6' || $num[$l]==='8' || $num[$l]==='0'))
    $l --;
if ($l < 0) return "";
$s = "";
for ($i = 0; $i <= $l; $i ++)
    $s=$s.$num[$i];
echo $s;
?>
