<?php

namespace App;

class App
{
    public function run($number) : int {
        if ($number === 0) {
            return 0;
        }

        return $number;
    }
}