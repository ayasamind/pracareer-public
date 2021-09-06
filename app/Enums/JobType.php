<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class JobType extends Enum implements LocalizedEnum
{
    const COMPREHENSIVE =   1; 
    const SALES         =   2;
    const PLANNER       =   3; 
    const ACCOUNTING    =   4; 
    const HR            =   5;
    const RECRUITER     =   6;
    const PR            =   7;
    const DESIGNER      =   8;
    const ENGINEER      =   9;
    const DIRECTOR      =   10;
    const SECRETARY     =   11;
    const CONSULTANT    =   12;
    const OTHERS        =   13;

      /**
     * 職種のリストを取得
     *
     * @return array
     */
    public static function getJobTypeList()
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
     * 職種のリストを取得
     *
     * @return array
     */
    public static function getJobTypeListWithoutNull()
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
