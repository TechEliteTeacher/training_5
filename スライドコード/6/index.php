<?php
// forループ
// 10未満までループ
for ($i=0; $i < 10; $i++) {
    echo $i;
}

// foreach
$array = array("a","b","c",1,2,3);
foreach ($array as $key => $value) {
    echo $value;
}

// while
// 20未満までループ
$num = 0;
while ($num < 20) {
    echo "num".$num;
    $num++;
}
?>