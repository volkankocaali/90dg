<?php

namespace App\Http\Libraries;


class MethodManager implements MethodManagerInterface
{

    public static function rotate($array)
    {
        $method = new Method($array);
        $array = $method->getArray();

        $height = count($array);
        $width = count($array[0]);
        $matRotate = array();

        for ($i = 0; $i < $width; $i++) {
            for ($j = 0; $j < $height; $j++) {
                $matRotate[$height - $i - 1][$j] = $array[$height - $j - 1][$i];
            }
        }
        return $matRotate;

    }
}
