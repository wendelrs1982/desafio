<?php

namespace Tests;

use App\elementosAdjacentesClass;
use PHPUnit\Framework\TestCase;

class elementosAdjacentesTest extends TestCase {
    private elementosAdjacentesClass $produto;

    protected function setUp(): void {
        $this->produto = new elementosAdjacentesClass();
    }

    public function testNumerosPositivos(): void {
        $this->assertEquals(21, $this->produto->maiorProdutoElementosAdjacentes([3, 6, -2, -5, 7, 3]));
    }

    public function testNumerosNegativos(): void {
        $this->assertEquals(50, $this->produto->maiorProdutoElementosAdjacentes([-10, -5, -2, -1]));
    }

    public function testNumerosMistos(): void {
        $this->assertEquals(-20, $this->produto->maiorProdutoElementosAdjacentes([-4, 5, -10, 4]));
    }

    public function testArrayPequeno(): void {
        $this->assertEquals(6, $this->produto->maiorProdutoElementosAdjacentes([2, 3]));
    }

    public function testArrayGrande(): void {
        $arrayInteiros = range(1, 1000);
        $this->assertEquals(999000, $this->produto->maiorProdutoElementosAdjacentes($arrayInteiros));
    }

}