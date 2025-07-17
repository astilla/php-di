<?php

namespace classses;

class Foo
{
    private Bar $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function sayBar()
    {
        $this->bar->sayBar();
    }
}
