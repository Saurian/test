<?php

/**
 * This file is part of the smazat2
 * Copyright (c) 2015
 *
 * @file    Pokus2.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */
class Pokus2
{


//    naše soubory


    private $test;

    function __construct()
    {
        // TODO: Implement __construct() method.
        $this->test = 0;
    }


    /**
     * @param $a
     *
     * @return int
     */
    public function a15($a)
    {
        if ($a !== $this->test) {
            var_dump($a);
        }

        return $a % $this->test;

    }

} 