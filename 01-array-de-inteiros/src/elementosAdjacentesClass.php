<?php

namespace App;

class elementosAdjacentesClass {
    private array $cacheArray = [];
    private $lock;

    public function __construct() {
        $this->lock = fopen(sys_get_temp_dir() . '/maior_produto_adjacente.lock', 'c');
    }

    public function maiorProdutoElementosAdjacentes(array $arrayInteiros): int 
    {
        if (count($arrayInteiros) < 2) {
            throw new \InvalidArgumentException("O array deve conter pelo menos dois elementos.");
        }

        if (!array_reduce($arrayInteiros, fn($carry, $item) => $carry && is_int($item), true)) {
            throw new \InvalidArgumentException("O array deve conter apenas números inteiros.");
        }


        $key = md5(json_encode($arrayInteiros));

        // Garantimos acesso exclusivo ao cache
        flock($this->lock, LOCK_EX);
        
        if (isset($this->cacheArray[$key])) {
            $result = $this->cacheArray[$key];
            flock($this->lock, LOCK_UN);
            return $result;
        }
        
        // Se não estiver no cache, calcula o maior produto
        $maiorProduto = PHP_INT_MIN;
        for ($i = 0; $i < count($arrayInteiros) - 1; $i++) {
            $produto = $arrayInteiros[$i] * $arrayInteiros[$i + 1];
            if ($produto > $maiorProduto) {
                $maiorProduto = $produto;
            }
        }
        
        // Armazena o resultado no cache
        $this->cacheArray[$key] = $maiorProduto;
        flock($this->lock, LOCK_UN);
        
        return $maiorProduto;
    }
}