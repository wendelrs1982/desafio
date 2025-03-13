<?php

namespace Tests;

use App\arrayDeStringsClass;
use PHPUnit\Framework\TestCase;

class arrayDeStringsTest extends TestCase {
    private arrayDeStringsClass $string;

    protected function setUp(): void {
        $this->string = new arrayDeStringsClass();
    }

    public function testStringsDiversas(): void {
        $this->assertEquals(["aba", "vcd", "aba"], $this->string->todasStringsMaisLongas(["aba", "vcd", "aba" ,"aa", "ad"]));
    }
    
    public function testStringsDeMesmoTamanho(): void {
        $this->assertEquals(["casa", "mesa"], $this->string->todasStringsMaisLongas(["casa", "mesa"]));
    }
    
    public function testArrayVazio(): void {
        $this->assertEquals([], $this->string->todasStringsMaisLongas([]));
    }
    
    public function testUmaUnicaString(): void {
        $this->assertEquals(["unica"], $this->string->todasStringsMaisLongas(["unica"]));
    }
}