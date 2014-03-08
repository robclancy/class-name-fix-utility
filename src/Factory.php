<?php

namespace Robbo\ClassNameFixUtility;

use Robbo\ClassNameFixUtility\Fixer\ClassFromDriver;

use Robbo\ClassNameFixUtility\Fixer\NewClassInterface;

class Factory {

	protected $class_from_name;

	public function __construct($from_class) {
		$this->class_from_name = new ClassFromDriver($from_class);
	}

	public function make($ToClass) {
		$newClass = new NewClassInterface($ToClass);

		return $newClass->quickFix($this->class_from_name);
	}
}