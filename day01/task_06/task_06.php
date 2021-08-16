<?php
    function get_angry_dog(int $nb) {
        $str = "";

        for ($i = 0; $i < $nb; $i++)
            $str = $str. "woof";
        return ($str);
    }
?>