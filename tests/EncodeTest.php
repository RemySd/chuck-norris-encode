<?php

namespace App\Tests;

use ChuckNorrisEncode\Encoder;
use PHPUnit\Framework\TestCase;

class EncodeTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertEquals('0 0 00 0000 0 00', Encoder::encode("C"));
    }

    public function testSuccess2()
    {
        $this->assertEquals('00 0 0 0 00 00 0 0 00 0 0 0', Encoder::encode("%"));
    }

    public function testError()
    {
        $this->assertNotEquals('0 0 00 0000 0 00', Encoder::encode("CC"));
    }
}
