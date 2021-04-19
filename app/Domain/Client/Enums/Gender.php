<?php

namespace Domain\Client\Enums;

use MyCLabs\Enum\Enum;

class Gender extends Enum {
    private const MALE = 'male';
    private const FEMALE = 'female';

    public static function gender(value) {
        return value === "M" ? Gender::Male : Gender::Female;
    }
}