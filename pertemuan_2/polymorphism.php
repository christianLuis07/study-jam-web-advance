<?php
// Interface = kontrak method yang harus diimplementasi
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo "Bark";
  }
}

// Array berisi object berbeda tapi diperlakukan sama
$animals = [new Cat(), new Dog()];

foreach ($animals as $a) {
  $a->makeSound(); // hasilnya bisa berbeda tergantung class
  echo "<br>";
}
?>
