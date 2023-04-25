<?php
$num = 153;
$sum = 0;
$temp = $num;

while($temp != 0) {
  $digit = $temp % 10;
  $sum = $sum + ($digit ** 3);
  $temp = (int)($temp / 10);
}

if($num == $sum) {
  echo $num . " is an Armstrong number";
}
else {
  echo $num . " is not an Armstrong number";
}
?>