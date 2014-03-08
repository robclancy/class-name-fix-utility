<?php

// Fork of http://on.fb.me/1kEGLbA

namespace Gary {

use Robbo\ClassNameFixUtility\Fixer\FinalClass;

    class TheGoat 
    {

        public function __construct(\Robbo\ClassNameFixUtility\Fixer\NewClassInterface $new, 
                                                                \Robbo\ClassNameFixUtility\Fixer\ClassFromDriver $old)
        {
            $this->eat($new, $old);
        }

        private function eat(FinalClass $num, FinalClass $nums)
        {
            __e($num, $nums);
        }

        public function shouldBeFixed($fixed)
        {
            if ($fixed === true)
                {
                    return true;
                }
            else if ($fixed === false)
                {
                    return $fixed != true;
                }

                    return !$fixed;
        }
    }
}