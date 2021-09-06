<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class RequestStatus extends Enum implements LocalizedEnum
{
    const UNCONFIRMED     =   1; // 未確認
    const APPROVED        =   2; // 承認
    const NON_APPROVED    =   3; // 非承認
}
