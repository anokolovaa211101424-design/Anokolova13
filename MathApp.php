<?php

namespace Anna\Lab13;

class MathApp
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function factorial($n)
    {
        $result = 1;

        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }
}