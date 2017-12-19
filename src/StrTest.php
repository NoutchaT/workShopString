<?php

namespace Strings;
use PHPUnit\Framework\TestCase;


class StrTest extends TestCase
{

    public function testExo2()
    {
        $string = Str::on('my_string')->camelCase()->toString();

        $this->assertSame('myString', $string);
    }


}
?>