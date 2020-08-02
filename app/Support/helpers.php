<?php

use App\Models\Country;
use App\Models\User;

if (!function_exists('generateUID')) {
    /**
     * @return string
     */
    function generateUID()
    {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $user_id = substr(str_shuffle($chars), 0, 8);
        if (checkUserExists($user_id)) {
            return generateUID();
        }
        return $user_id;
    }
}

if (!function_exists('checkUserExists')) {
    /**
     * @param $user_param
     * @return boolean
     */
    function checkUserExists($user_param)
    {
        $user = User::where('email', '=', $user_param)->first();
        if ($user)
            return true;
        return false;
    }
}

if (!function_exists('getCountries')) {
    /**
     * // Checks if the shop already exists
     * @return array
     */
    function getCountries()
    {
        return Country::all();
    }
}

if (!function_exists('removeSnakeCase')) {
    /**
     * @param string $name
     * @return string
     */
    function removeSnakeCase($name)
    {
        return ucwords(str_replace('_', ' ', $name));
    }
}
