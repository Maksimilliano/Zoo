<?php
namespace Max\Zoo\Entities;


use Max\Zoo\Interfaces\Animal;

class Cat implements Animal
{
    public function speak()
    {
        return 'Cat: Meow!';
    }

    public function move()
    {
        return 'and sneaking';
    }
}


?>