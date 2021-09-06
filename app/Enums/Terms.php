<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class Terms extends Enum implements LocalizedEnum
{
    const NOTHING           =   1; // 特になし
    const MORE_THAN_THREE   =   2; // 3~6ヶ月
    const MORE_THAN_SIX     =   3; // 6ヶ月以上
    const MORE_THAN_YEAR    =   4; // 1年以上
}
