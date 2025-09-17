<?php

class Base {
    final public function hello() {
        echo "Halo dari Base!";
    }
}

class Child extends Base {
    // error karena pada kelas base method hello di set final
    public function hello() {
        echo "Halo dari Child!";
    }
}

$child = new Child();
$child->hello();

?>