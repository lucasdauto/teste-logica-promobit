<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $newArray = array();
        foreach (self::products as $product) {
            list($color, $size) = explode('-', $product);
            if(!isset($newArray[$color])){
                $newArray[$color] = [$size => 1];
            }else {
                if(isset($newArray[$color][$size])){
                    $newArray[$color][$size]++;
                }else {
                    $newArray[$color] = $newArray[$color] + [$size => 1];
                }
            }
        }
        return $newArray;
    }
}