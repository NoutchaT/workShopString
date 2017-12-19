<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo6()
    {
        $str = Str::on('mY StrIng');
        $this->assertSame($str->camelCase()->toString(),'myString');
        $this->assertSame($str->snakeCase()->toString(),  'my_string'); // true
        $this->assertSame($str->studlyCase()->toString(),  'MyString'); // true
        $this->assertSame($str->titleCase()->toString() , 'MyString'); // true
        $this->assertSame($str->slugCase()->toString() , 'my-string'); // true
        $this->assertSame($str->kebabCase()->toString(),  'my-string'); // true
        $this->assertSame($str->toString() , 'mY StrIng'); // true
        $this->assertSame((string) $str , 'mY StrIng');

    }


}
?>