<?php

namespace App\Utils;

class Numbers  
{
    const MIN_RANGE     =        1;
    const MAX_RANGE     =   10**10;
    const OUT_OF_RANGE  =       -1;

    public static function number_in_range(int $number): bool
    {
        $is_in_min_range = self::MIN_RANGE <= $number;
        $is_in_max_range = self::MAX_RANGE >= $number;

        return ( $is_in_min_range and $is_in_max_range ) ? true : false;
    }

    public static function Guess(
                int $number,
                int $min_range=self::MIN_RANGE,
                int $max_range=self::MAX_RANGE
    ): int
    {
            if(!is_int($number)){ return self::OUT_OF_RANGE; }
            if(!self::number_in_range($number)){ return self::OUT_OF_RANGE; }
            $guess = intval($min_range + (($max_range - $min_range)/2));
            if ($guess > $number) { return self::Guess($number, $min_range, $guess); }
            if ($guess < $number) { return self::Guess($number, $guess, $max_range); }

            return $guess;
    }
}

