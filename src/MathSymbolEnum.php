<?php

namespace Math\src;

enum MathOperatorEnum :string
{
    case Φ = 'Φ' ;
    case Δ = 'Δ' ;
    case ∇ = '∇' ;
    case Λ = 'Λ' ;
    case Σ = 'Σ' ;
    case Ψ = 'Ψ' ;
    case Ω = 'Ω' ;
    case ∞ = '∞';
    case ∂ = '∂';
    case ∫ = '∫';
    case ∮ = '∮';
    case ∯= '∯';
    case ∰ = '∰';
    case α = 'α';
    case β = 'β';
    case γ = 'γ';
    case δ = 'δ';
    case ε = 'ε';
    case ζ = 'ζ';
    case η = 'η';
    case θ = 'θ';
    case ι = 'ι';
    case κ = 'κ';
    case λ = 'λ';
    case μ = 'μ';
    case ν = 'ν';
    case ξ = 'ξ';
    case π = 'π';
    case ρ = 'ρ';
    case ς = 'ς';
    case σ = 'σ';
    case τ = 'τ';
    case ∈ = '∈';
    case ∉ = '∉';
    case ∊ = '∊';
    case ∋ = '∋';
    case ∌ = '∌';
    case ∍ = '∍';
    case φ = 'φ';
    case χ = 'χ';
    case ψ = 'ψ';
    case ω = 'ω';
    case ο = 'ο';

    case ∩ = '∩';
    case ∪ = '∪';
    case ⊂ = '⊂';
    case ⊃ = '⊃';
    case ⊆ = '⊆';
    case ⊇ = '⊇';
    case ∏ = '∏';
    case ∑ = '∑';

    case ≠ = '≠';
    case ≈ = '≈';
    case ± = '±';
    case plus = '+';
    case − = '−';
    case ∠ = '∠';

    case × = '×';

    case ÷ = '÷';
    case ∴ = '∴' ;
    case ∵ = '∵' ;

    public static function getValues(): array {
        return array_map(fn($case) => $case->value, self::cases());
    }
}


enum MathPowerEnum :string
{
    case power = '^';
    case ⁰ = '⁰';
    case ¹ = '¹';
    case ² = '²';
    case ³ = '³';
    case ⁴ = '⁴';
    case ⁵ = '⁵';
    case ⁶ = '⁶';
    case ⁷ = '⁷';
    case ⁸ = '⁸';
    case ⁹ = '⁹';
    case ⁺ = '⁺';
    case ⁻ = '⁻';
    case ⁼ = '⁼';
    case ⁱ = 'ⁱ';
    case ⁿ = 'ⁿ';
    case ⁾ = '⁾';
    case ⁽ = '⁽';

    public static function getValues(): array {
        return array_map(fn($case) => $case->value, self::cases());
    }
}

enum MathRootEnum :string
{
    case √ = '√';
    case ∛ = '∛';
    case ∜ = '∜';

    public static function getValues(): array {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
