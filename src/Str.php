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

}