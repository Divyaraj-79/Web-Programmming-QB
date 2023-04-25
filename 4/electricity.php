<?php
$units = 200;
$total_bill = 0;

if($units <= 50) {
  $total_bill = $units * 0.50;
}
else if($units <= 150) {
  $total_bill = 25 + (($units - 50) * 0.75);
}
else if($units <= 250) {
  $total_bill = 100 + (($units - 150) * 1.20);
}
else {
  $total_bill = 220 + (($units - 250) * 1.50);
}

echo "Total units consumed: " . $units . "<br>";
echo "Total bill: Rs " . $total_bill;
?>