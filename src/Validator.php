<?php

declare(strict_types=1);

namespace Farkasp1050\Validator;

class Validator
{
    public static function isEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function isPasswordValid($password, $min, $max): bool
    {
        return strlen($password) >= $min && strlen($password) <= $max;
    }

    public static function isAgeValid($age, $min = null, $max = null): bool
    {
        if (!is_numeric($age)) {
            return false;
        }

        if ($min !== null && $age < $min) {
            return false;
        }

        if ($max !== null && $age > $max) {
            return false;
        }

        return true;
    }

    public static function isAgeBetween($age, $lowerTreshold, $upperTreshold): bool
    {
        return $age >= $lowerTreshold && $age <= $upperTreshold;
    }

    public static function isAgeExactly($age, $value): bool
    {
        return $age === $value;
    }

    public static function isAgeNot($age, $value): bool
    {
        return $age !== $value;
    }

    public static function isSexValid($sex, $correct = ['female', 'male']): bool
    {
        return in_array($sex, $correct);
    }
}