<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class Gender extends Enum implements LocalizedEnum
{
    const MAN       =   1; // 男性
    const WOMAN     =   2; // 女性
    const OTHER     =   3; // その他
}
