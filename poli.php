<?php

interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Bark\n";
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow\n";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo "Squeak\n";
    }
}

function animalSound(Animal $animal)
{
    $animal->makeSound();
}

// Test polimorfisme
$dog = new Dog();
$cat = new Cat();
$mouse = new Mouse();

animalSound($dog);  // Output: Bark
animalSound($cat);  // Output: Meow
animalSound($mouse);  // Output: Squeak
