<?php

namespace App\Enums;

enum ProductStatus: string
{
    case Analyze = 'analyze';

    case Approved = 'approved';

    case Rejected = 'rejected';


    public static function toRule(): string
    {
        $values = array_column(ProductStatus::cases(), 'value');

        return implode(',', $values);
    }

    public function toLabel(): string
    {
        return match ($this) {
            self::Analyze => 'Em analise',
            self::Approved => 'Aprovado',
            self::Rejected => 'Rejeitado',
        };
    }

    public static function toSelection(): array
    {
        return [
            self::Analyze,
            self::Approved,
            self::Rejected,
        ];
    }

    public static function toArray(): array
    {
        return [
            self::Analyze,
            self::Approved,
            self::Rejected,
        ];
    }
}
