<?php

namespace App;

class Example
{
    protected $collaborator;

    public function go() 
    {
        dump('it works!');
    }

    public function __construct(Collaborator $collaborator, $foo) 
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
}