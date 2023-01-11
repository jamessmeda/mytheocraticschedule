<?php

namespace App\Policies;

use App\Models\BibleBook;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BibleBookPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, BibleBook $bibleBook): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, BibleBook $bibleBook): bool
    {
    }

    public function delete(User $user, BibleBook $bibleBook): bool
    {
    }

    public function restore(User $user, BibleBook $bibleBook): bool
    {
    }

    public function forceDelete(User $user, BibleBook $bibleBook): bool
    {
    }
}
