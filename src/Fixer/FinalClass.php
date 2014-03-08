<?php

namespace Robbo\ClassNameFixUtility\Fixer;

use StandardClass;

abstract class FinalClass extends StandardClass
{
    private $c;

    abstract public function set($set);

    protected function get($d){return $this->$d;}

    protected function setClass($b)
    {
        $this->c = $b;
    }

    public function getClass()
    {
        $d = 'get';
        return $this->$d('c');
    }
}