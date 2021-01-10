<?php

namespace App\Utils;

class Numbers  
{
    const MIN_RANGE     =      1;
    const MAX_RANGE     = 10**10;
    const OUT_OF_RANGE  =     -1;

    public static function Guess(int $number): int
    {
        if(self::MIN_RANGE > $number or self::MAX_RANGE < $number)
        {
            return self::OUT_OF_RANGE;
        }

        $guessed_number = NULL;

        return $guessed_number;
    }
}

