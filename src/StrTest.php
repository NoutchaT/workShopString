<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo5()
    {
        $this->assertSame(Str::toStudlyCase('my_string') , 'MyString'); // true
        $this->assertSame(Str::toStudlyCase('myString') , 'MyString'); // true
        $this->assertSame(Str::toStudlyCase('my-string') , 'MyString'); // true
        $this->assertSame(Str::toStudlyCase('my string') , 'MyString'); // true
        $this->assertSame(Str::toStudlyCase('My String') , 'MyString'); // true
    }


}
?>