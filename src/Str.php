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
      $this->string = str_replace($search, $replace, $this->string);
        //$this->string = $string;
        return $this;
    }

    public function pregreplace($search, $replace) {
        $this->string = preg_replace($search, $replace, $this->string);
        //$this->string = $string;
        return $this;
    }

    public function strtolower() {
        $this->string  = strtolower($this->string);
        return $this;
    }

    public function ucwords() {
        $this->string  = ucwords($this->string);
        return $this;
    }

    public function lcfirst() {
        $this->string  = lcfirst($this->string);
        return $this;
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
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
    }

    public function snakeCase(){
        $needle = array('-', ' ','?');
        return $this->replace($needle, '_')
            ->pregreplace('/(.)(?=[A-Z])/', '$1_')
            ->strtolower()
            ->replace('__', '_');
    }

    public function slugCase () {
        $needle = array('_', ' ','?');
        return $this->replace($needle, '-')
            ->pregreplace('/(.)(?=[A-Z])/', '$1-')
            ->strtolower()
            ->replace('--', '-');
    }

    public function studlyCase () {
        $needle = array('-', '_','?');
        return $this->replace($needle, ' ')
            ->ucwords()
            ->replace(' ', '');
    }
}