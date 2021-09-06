<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class IndustryType extends Enum implements LocalizedEnum
{
    const IT             =   1; 
    const RETAIL         =   2;
    const MAKER          =   3; 
    const LOGISTICS      =   4; 
    const PRODUCTION     =   5; 
    const PUBLICATION    =   6;
    const INFRASTRUCTURE =   7; 
    const OTHERS         =   8; 

    /**
     * 業界のリストを取得
     *
     * @return array
     */
    public static function getIndustryList()
    {
        $keys = self::getKeys();
        $values = self::getValues();

        $list = [null => '選択してください'];
        foreach ($values as $index => $value) {
            $list[$value] = self::getDescription($value);
        }

        return $list;
    }


    /**
     * 業界のリストを取得
     *
     * @return array
     */
    public static function getIndustryListWithoutNull()
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