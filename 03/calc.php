<?php 
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$r1 = $_GET['operator'];

if ($r1 === 'addition') {
    echo $num1 . ' + ' . $num2 . ' = ';
    echo $num1 + $num2;
}elseif ($r1 === 'subtraction') {
    echo $num1 . ' - ' . $num2 . ' = ';
    echo $num1 - $num2;
}elseif ($r1 === 'multiplication') {
    echo $num1 . ' * ' . $num2 . ' = ';
    echo $num1 * $num2;
}elseif ($r1 === 'division') {
    echo $num1 . ' / ' . $num2 . ' = ';
    echo $num1 / $num2;
}else{
    echo '正しい演算子を指定して下さい｡';
}


?>