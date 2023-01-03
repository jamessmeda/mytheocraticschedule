<?php

namespace App\Policies;

use App\Models\Thing;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Thing $thing): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Thing $thing): bool
    {
    }

    public function delete(User $user, Thing $thing): bool
    {
    }

    public function restore(User $user, Thing $thing): bool
    {
    }

    public function forceDelete(User $user, Thing $thing): bool
    {
    }
}
