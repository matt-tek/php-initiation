<?php
    function my_print_args($argv) {
        $len = count($argv);
        for ($i = 1; $i < $len; $i++) {
            echo $argv[$i] . "\n";
        }
    }
    my_print_args($argv);
?>