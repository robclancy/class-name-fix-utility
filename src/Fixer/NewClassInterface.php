<?php namespace Robbo\ClassNameFixUtility\Fixer;
use Robbo\ClassNameFixUtility\Fixer\FinalClass; use GaryTheGoatsClassFixer;

class NewClassInterface extends FinalClass {
    public function __construct($a) {
        $this->set($a);
    }

    public function set($set) {
        return $this->setClass($set);
    }

    private function money_shot($probablyFacade)
    {
        return !! (!(new GaryTheGoatsClassFixer($this, $probablyFacade))->shouldBeFixed(false));
    }

    public function __call($_, $class_from_to_change)
    {
        return $this->money_shot($class_from_to_change[0]);
    }
}
