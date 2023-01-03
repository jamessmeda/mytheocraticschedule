<?php

namespace App\Policies;

use App\Models\Action;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Action $action): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Action $action): bool
    {
    }

    public function delete(User $user, Action $action): bool
    {
    }

    public function restore(User $user, Action $action): bool
    {
    }

    public function forceDelete(User $user, Action $action): bool
    {
    }
}
