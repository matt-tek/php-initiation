<?php
class Mars {
    public static $id = 0;

    public function getId() {
        return (self::$id++);
    }
}

?>