<?php

declare(strict_types=1);

namespace Validator;

class Validator
{
    public static function isEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function isPasswordValid($password, $min, $max): bool
    {
        return strlen($password) >= $min && strlen($password) <= $max;
    }

    public static function isAgeValid($age, $min = null, $max = null, $goalAge = -1, $wrongAge = -1): bool
    {
        if (!is_numeric($age)) {
            return false;
        }

        if ($min !== null && $age < $min || $max !== null && $age > $max) {
            return false;
        }

        if ($goalAge !== -1 && $age !== $goalAge || $wrongAge !== -1 && $wrongAge === $age) {
            return false;
        }

        return true;
    }

    public static function isSexValid($sex, $correct = ['female', 'male'])
    {
        return in_array($sex, $correct);
    }
}