<?php
namespace Max\Zoo\Entities;


use Max\Zoo\Interfaces\Animal;

class Bird implements Animal
{
    public function speak()
    {
        return 'Gull: Ha-ha-ha!';
    }

    public function move()
    {
        return 'and hunting on a fish';
    }
}

?>