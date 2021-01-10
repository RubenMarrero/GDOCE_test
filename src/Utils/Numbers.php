<?php

namespace App\Utils;

class Numbers  
{
    const MIN_RANGE     =      1;
    const MAX_RANGE     = 10**10;
    const OUT_OF_RANGE  =     -1;

    public static function number_in_range(int $number): bool
    {
        $is_in_min_range = self::MIN_RANGE <= $number;
        $is_in_max_range = self::MAX_RANGE >= $number;

        return ( $is_in_min_range and $is_in_max_range ) ? true : false;
    }

    public static function Guess(int $number): int
    {
        if(self::number_in_range($number))
        {
            return self::OUT_OF_RANGE;
        }

        $guessed_number = NULL;

        return $guessed_number;
    }
}

