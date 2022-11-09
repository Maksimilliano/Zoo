<?php
namespace Max\Zoo\Entities;


use Max\Zoo\Interfaces\Animal;

class Bear implements Animal
{
    public function speak()
    {
        return 'Bear: Growls!';
    }

    public function move()
    {
        return 'and climbing a tree';
    }
}


?>