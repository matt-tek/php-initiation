<?php
    require("task_10_2.php");
    $len = count($argv);
    if ($len > 1) {
        my_included_putstr($argv[1]);
    }
?>