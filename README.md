# math-symbol
A package that contains alot of mathmetic symbols

You can use this to help you to write mathmetic functions using these orders 

use Math\MathProv\MathFacade;

// To get powers
$math_powers = MathFacade::get_powers();

// To get roots
$math_roots = MathFacade::get_roots();

// To get all math symbols
$math_symbols = MathFacade::get_math_symbols();

// To get a fraction
$fraction = MathFacade::get_fraction($numerator, $denominator);
