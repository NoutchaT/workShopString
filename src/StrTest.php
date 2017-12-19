<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo4()
    {
        $this->assertSame(Str::toSlugCase('my_string'), 'my-string'); // true
        $this->assertSame(Str::toSlugCase('myString'), 'my-string'); // true
        $this->assertSame(Str::toSlugCase('my-string') , 'my-string'); // true
        $this->assertSame(Str::toSlugCase('my string') , 'my-string'); // true
        $this->assertSame(Str::toSlugCase('My String') ,'my-string'); // true

    }


}
?>