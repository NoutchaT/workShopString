<?php

namespace Strings;
class Str
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public static function on($string) {
        return new self($string);
    }


    public function replace($search, $replace) {
        $replaced = str_replace($search, $replace, $this->string);
        //$this->string = $string;
        return new self ($replaced);
    }

    public function pregreplace($search, $replace) {
        $pregreplaced = preg_replace($search, $replace, $this->string);
        //$this->string = $string;
        return new self ($pregreplaced);
    }

    public function strtolower() {
        $strtolowered  = strtolower($this->string);
        return new self ($strtolowered);
    }

    public function ucwords() {
        $ucwordsed  = ucwords($this->string);
        return new self ($ucwordsed);
    }

    public function lcfirst() {
        $lcfirsted  = lcfirst($this->string);
        return new self ($lcfirsted);
    }

    public function __toString() {
        return $this->string;
    }



    public function toString(){

        return $this->__toString();
    }

    public static function __callStatic($name, $arguments)
    {
        if (!strpos('to', $name) === 0) {
            throw new Exception("Méthode inconnu");
        }
        $methodName = lcfirst(self::on($name)->replace('to', ''));
        return (string)self::on($arguments[0])->{$methodName}();
    }

    public function camelCase(){
        $needle = array('-', '_','?');
        return $this->replace($needle, ' ')
            ->strtolower()
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
    }

    public function snakeCase(){
        $needle = array('-', ' ','?');
        return $this->replace($needle, '_')
            ->strtolower()
            ->pregreplace('/(.)(?=[A-Z])/', '$1_')
            ->replace('__', '_');
    }

    public function studlyCase () {
        $needle = array('-', '_','?');
        return $this->replace($needle, ' ')
            ->strtolower()
            ->ucwords()
            ->replace(' ', '');
    }

    public function titleCase() {
        $needle = array('-', '_','?');
        return $this->replace($needle, ' ')
            ->strtolower()
            ->ucwords()
            ->replace(' ', '');
    }

    public function slugCase () {
        $needle = array('_', ' ','?');
        return $this->replace($needle, '-')
            ->strtolower()
            ->pregreplace('/(.)(?=[A-Z])/', '$1-')
            ->replace('--', '-');
    }

    public function kebabCase () {
        $needle = array('_', ' ','?');
        return $this->replace($needle, '-')
            ->strtolower()
            ->pregreplace('/(.)(?=[A-Z])/', '$1-')
            ->replace('--', '-');
    }
}