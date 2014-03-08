<?php

namespace Robbo\ClassNameFixUtility\Fixer;

use Robbo\ClassNameFixUtility\Fixer\FinalClass;

class ClassFromDriver extends FinalClass
{
    public function __construct($a)
    {
        $this->set($a);
    }

    public function set($set)
    {
        return $this->setClass($set);
    }
}
