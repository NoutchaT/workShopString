<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo2_5()
    {

        $this->assertSame(Str::toCamelCase('my_string') , 'myString'); // true
        $this->assertSame(Str::toCamelCase('myString') , 'myString'); // true
        $this->assertSame(Str::toCamelCase('my-string') , 'myString'); // true
        $this->assertSame(Str::toCamelCase('my string') , 'myString'); // true
        $this->assertSame(Str::toCamelCase('My String') , 'myString'); // true
    }


}
?>