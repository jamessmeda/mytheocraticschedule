<?php

namespace App\Policies;

use App\Models\Reading;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReadingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Reading $reading): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Reading $reading): bool
    {
    }

    public function delete(User $user, Reading $reading): bool
    {
    }

    public function restore(User $user, Reading $reading): bool
    {
    }

    public function forceDelete(User $user, Reading $reading): bool
    {
    }
}
