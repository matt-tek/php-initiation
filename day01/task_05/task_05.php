<?php
    function my_swap(&$a, &$b) {
        $tmp = $a;
        $a = $b;
        $b = $tmp;
    }
    $a = 7;
    $b = 5;
    my_swap($a, $b);
    echo "a = " . $a . " and b = " . $b;
?>