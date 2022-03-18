<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SIZE_S()
 * @method static static SIZE_M()
 * @method static static SIZE_L()
 * @method static static SIZE_XL()
 */
final class ProductSizeType extends Enum
{
    public const SIZE_S = 'S';
    public const SIZE_M = 'M';
    public const SIZE_L = 'L';
    public const SIZE_XL = 'XL';
}
