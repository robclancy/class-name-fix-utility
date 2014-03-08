# Class Name Fix Utility

This is used to rename badly named classes. Comes with built in Laravel support to rename `Facade` to `Surrogate`.

### Good Code Makes Good Apps
**100% tested with TDD**

**phpmin usage to get maximum performance**

**can literally change thousands of class names without any performance issues at all**


## Installation

Add `"robclancy/class-name-fix-utility": "dev-master"` to your `composer.json` in the `require` block and do a `composer update`.

## Usage

Simply run `ClassNameFixUtility\Facade::fix($classFrom, $classTo)`.

## Laravel Usage

Add `Gary\Controller` to your `app/config.php` services array and `Facade` will be renamed to `Surrogate`. Now when you want to extend the `Facade` you can do it by a more appropriately named `Surrogate`. 100% backward compatable.