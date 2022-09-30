<?php
$nums = array();

for ($i=0; $i < 7; $i++) { 
    $nums[$i] = rand(0,50);
}
print_r($nums);
sort($nums);

$menor = $nums[0];
$mayor = $nums[count($nums)-1];

$total = 0;
foreach ($nums as $val) {
    $total += $val;
}

$media = $total / count($nums);

echo " <br> Num mayor: $mayor Num menor: $menor Total: $total Media: $media";

?>