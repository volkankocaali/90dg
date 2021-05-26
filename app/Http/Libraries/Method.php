<?php

namespace App\Http\Libraries;

class Method {

    private $array;

    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * @return mixed
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * @param mixed $array
     */
    public function setArray($array): void
    {
        $this->array = $array;
    }
}
