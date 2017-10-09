<?php
/**
 * Created by PhpStorm.
 * User: datlt
 * Date: 05/10/2017
 * Time: 11:55
 */

namespace App\Helpers;


class Helper
{
    const IS_ACTIVE = 1;

    /**
     * @param string $gender
     * @return int
     */
    public static function detectGenderUser($gender = '')
    {
        $gender = strtolower($gender);
        if ($gender === 'male') {
            return 1;
        }

        return 0;
    }
}