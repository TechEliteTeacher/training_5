<?php
$a = 1;
$b = 1;

// 例1
if($a == $b) {
    echo "aとbは同じです";
} else {
    echo "aとbは違います";
}

// 例２
if($a == $b) :
    echo "aとbは同じです";
else:
    echo "aとbは違います";
endif;

?>