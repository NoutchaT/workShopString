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

    public function __toString() {
        return $this->string;
    }

    public function ucwords($focus) {
        $this->string = ucwords($focus);
        return $this;
    }

}