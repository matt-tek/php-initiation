<?php
    function my_password_hash(string $password) {
        $salt = rand(0, 100000);
        $cryp = md5($password . $salt);
        return (array("salt" => $salt, "hash" => $cryp));
    }

    function my_password_verify(string $password, string $salt, string $hash) {
        $cryp_bis = md5($password . $salt);
        if ($cryp_bis === $hash)
            return (true);
        else
            return (false);
    }
    
    $password = "hello";
    $arr = my_password_hash($password);
    $bool = my_password_verify($password, $arr["salt"], $arr["hash"]);
    echo $bool;
?>