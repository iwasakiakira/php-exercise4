<?php 
$nums = [
    [1,2],
    [3,4],
    [5,6,7],
];

echo $nums[1][1] . '<br>';//4
echo $nums[2][2] . '<br>';//7
echo $nums[2][1] . '<br>';//6
echo $nums[2][0] . '<br>';//5
echo $nums[0][0] . '<br>';//1
echo $nums[1][0] . '<br>';//3
echo $nums[0][1] . '<br>';//2

?>