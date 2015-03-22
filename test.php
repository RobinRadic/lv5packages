<?php

require_once __DIR__ . '/vendor/autoload.php';

class Createit
{
    use Laradic\Support\Traits\BindIlluminateTrait;


    protected $app;

    function __construct()
    {
        $this->app = new \Illuminate\Container\Container();
        $this->bindIlluminateCore($this->app);

    }

    function getApp()
    {
        return $this->app;
    }
}

\Symfony\Component\VarDumper\VarDumper::
