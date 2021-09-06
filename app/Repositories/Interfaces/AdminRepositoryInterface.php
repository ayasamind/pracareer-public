<?php

namespace App\Repositories\Interfaces;

use App\Models\AdminNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface AdminRepositoryInterface
{
    public function paginate(int $count): LengthAwarePaginator;

    public function createAdmin(array $input): bool;
}