<?php
$arr = [-11,5,2,7,34,724,2,7,2,85,45,1,1488];

for($k=0;$k<sizeof($arr);$k++){
    for($i=0;$i<sizeof($arr)-1;$i++){
        if ($arr[$i] > $arr[$i+1]){
            $a = $arr[$i];
            $arr[$i] = $arr[$i+1];
            $arr[$i+1] = $a;
        }
    }
}


var_dump($arr);
echo '<hr>';
$arr1 = [1, 2, 3, 4, 5];
echo sizeof($arr1);
echo "<hr>";
$arr2 = [1, 2, 3, 4, 5];
echo $arr2[count($arr2)-1];
echo '<hr>';
$arr3 = [1, 2, 3, 4, 5];
echo array_sum($arr3);
echo '<hr>';
$arr4 = [1, 2, 3, 4, 5];
echo sizeof($arr4);
echo '<hr>';
$arr5 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

echo $arr5['a'] + $arr5['b'] + $arr5['c'];
echo "<hr>";
$arr6 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$k = 'a';
echo $arr6[$k];
echo '<hr>';
$arr = [1, 2, 3, 4, 5];
echo count($arr);
echo "<hr>";
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$a = 'a';
echo $arr[$a];
?>