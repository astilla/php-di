<?php

namespace classses;

class Foo
{
    // Injected via contructor auto-wiring
    private Bar $bar;

    /**
     * Injected via annotation (to be used in top-level controllers)
     * 
     * @Inject 
     * @var Baz
     */
    private Baz $baz;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function sayBar()
    {
        $this->bar->sayBar();
    }

    public function sayBaz()
    {
        $this->baz->sayBaz();
    }

}
