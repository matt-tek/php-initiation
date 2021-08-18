<?php
class Gecko
{
    public $name = null;
    public $age;
    
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return ($this->age);
    }
    public function status() {
        $age = $this->age;
        switch (true) {
            case ($age == 0):
                echo "Unborn Gecko";
                break;
            case ($age == 1):
            case ($age == 2):
                echo "Baby Gecko";
                break;
            case ($age >= 3 && $age <= 10):
                echo "Adult Gecko";
                break;
            case ($age >= 11 && $age <= 13);
                echo "Old Gecko";
                break;
            default: echo "Impossible Gecko";
        }
    }
    public function __construct(...$str) {
        if ($str == null) {
            echo "Hello !\n";
        } else {
            $this->name = $str[0];
            echo "Hello ". $this->name. "\n";
        }
    }
    public function __destruct() {
        if ($this->name === null)
            echo "\nBye !";
        else
            echo "\nBye ". $this->name. "!";
    }
}

$thomas = new Gecko("Thomas");
$josef = new Gecko("josef");
$thomas->setAge(5);
$thomas->status();
unset($annonymus);

?>