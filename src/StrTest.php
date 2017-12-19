<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo3()
    {
        $this->assertSame(Str::toSnakeCase('my_string') , 'my_string'); // true
        $this->assertSame(Str::toSnakeCase('myString') , 'my_string'); // true
        $this->assertSame(Str::toSnakeCase('my-string') , 'my_string'); // true
        $this->assertSame(Str::toSnakeCase('my string') , 'my_string'); // true
        $this->assertSame(Str::toSnakeCase('My String') , 'my_string');

    }


}
?>