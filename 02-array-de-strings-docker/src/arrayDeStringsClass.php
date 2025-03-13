<?php

namespace App;

class arrayDeStringsClass{

    public function todasStringsMaisLongas(array $strings): array {
        if (empty($strings)) {
            return [];
        }
        
        $maxLength = max(array_map('strlen', $strings));
        return array_filter($strings, fn($str) => strlen($str) === $maxLength);
    }

}

