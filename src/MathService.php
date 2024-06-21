<?php
namespace Math\Services;

use Math\Enums\MathOperatorEnum;
use Math\Enums\MathPowerEnum;
use Math\Enums\MathRootEnum;

class MathService
{
    public function get_powers()
    {   //getting the math powers you need
        $math_powers = MathPowerEnum::getValues();
        return $math_powers;
    }

    public function get_roots()
    {   //getting the math roots
        $math_roots = MathRootEnum::getValues();
        return $math_roots;
    }

    public function get_math_symbols()
    {   //getting all math symbols you need to use
        $powers = MathPowerEnum::getValues();
        $roots = MathRootEnum::getValues();
        $operators = MathOperatorEnum::getValues();
        $math_symbols = array_merge($powers, $roots, $operators);
        return $math_symbols;
    }

    public function get_fraction($numerator , $denominator){
        $fraction_string = $numerator . '\u2044' . $denominator; // getting the fraction in this form ¼
        return $fraction_string;
    }
}
