<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminRepository implements AdminRepositoryInterface
{
    public Admin $admin;

    public function __construct(Admin $admin = null)
    {
        $this->admin = $admin ?? new Admin;
    }

    public function paginate(int $count): LengthAwarePaginator
    {
        return $this->admin->paginate($count);
    }

    public function createAdmin(array $input): bool
    {
        $input['password'] = Hash::make($input['password']);
        return $this->admin->create($input);
    }
}
