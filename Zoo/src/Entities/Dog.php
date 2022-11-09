<?php
namespace Max\Zoo\Entities;


use Max\Zoo\Interfaces\Animal;

class Dog implements Animal
{
    public function speak()
    {
        return 'Dog: Bark!';
    }

    public function move()
    {
        return 'and running';
    }
}

?>