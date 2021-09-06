<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class PostStatus extends Enum implements LocalizedEnum
{
    const DRAFT       =   1; // 下書き
    const PUBLISH     =   2; // 公開

    /**
     * ステータスのリストを取得
     *
     * @return array
     */
    public static function getStatusList()
    {
        $keys = self::getKeys();
        $values = self::getValues();

        $list = [];
        foreach ($values as $index => $value) {
            $list[$value] = self::getDescription($value);
        }

        return $list;
    }
}
