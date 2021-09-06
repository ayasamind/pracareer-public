<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Access\Authorizable;

/**
 * 管理者
 */
class Admin extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    public $table = 'admins';

    public $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    public static function getRules(int $id = null): array
    {
        $rule = [];

        // 編集時
        if ($id) {
            $rule = [
                'name' => 'required',
                'email' => "required|email|unique:admins,email,".$id,
            ];
        } else {
        // 新規作成時
            $rule = [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:8'
            ];
        }

        return $rule;
    }
}
