<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class Strength extends Enum implements LocalizedEnum
{
    const CONCENTRATION   =   1;
    const LOYALTY         =   2; 
    const EARNEST         =   3; 
    const COOPERATIVENESS =   4;
    const HUMILITY        =   5;
    const CHALLENGE       =   6;
    const FINISH          =   7;
    const COMMUNICATION   =   8;
    const COMPASSION      =   9;
    const DEXTERITY       =   10;
    const LOGIC           =   11;
    const ACTION          =   12;
    const SENSITIVITY     =   13;
    const POSITIVITY      =   14;
    const IMAGINATION     =   15;
    const INITIATIVE      =   16;
    const FOOTWORK        =   17;
    const STRESS          =   18;
    const AMBITION        =   19;
    const RESPONSIBILITY  =   20;
    const HARD_WORKER     =   21;
    const DISCIPLINE      =   22;
    const TENACIOUS       =   23;
    const SOCIABLE        =   24;
    const MEMORY          =   25;
    const RESOURCEFUL     =   26;
    const METICULOUS      =   27;
    const PLANNING        =   28;
    const CURIOUS         =   29;
    const CAUTIOUS        =   30;
    const COMPETITIVE     =   31;
     
    /**
     * 強み「のリストを取得
     *
     * @return array
     */
    public static function getStrengthList()
    {
        $keys = self::getKeys();
        $values = self::getValues();

        $list = [];
        foreach ($values as $index => $value) {
            $list[$value] = self::getDescription($value);
        }

        return $list;
    }


    /**
     * 強みのリストを取得
     *
     * @return array
     */
    public static function getStrengthListWithoutNull()
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