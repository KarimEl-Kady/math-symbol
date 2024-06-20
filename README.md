# Math Provider

This package provides a set of utility functions for mathematical operations.

## Installation

To install the package, add the following to your `composer.json` file:

```json
"require": {
    "math/math-prov": "^1.0"
}

```php
use Math\MathProv\MathFacade;

// To get powers
$math_powers = MathFacade::get_powers();

// To get roots
$math_roots = MathFacade::get_roots();

// To get all math symbols
$math_symbols = MathFacade::get_math_symbols();

// To get a fraction
$fraction = MathFacade::get_fraction($numerator, $denominator);

```
