<?php
class Astronaut {
    public string $name;
    public int $snack;
    public $destination;
    public static $id;

    public function getId() {
        return (self::$id++);
    }
    public function getDestination() {
        return ($this->destination);
    }
    public function __construct($name) {
        $this->name = $name;
        $this->snack = 0;
        $this->destination = null;
        self::$id = 0;
        echo $this->name . " ready for lunch !\n";
    }
}

?>