<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }

    public function update(User $user, Job $job): bool
    {
        return $job->employer->user->is($user) && 'foo' !== 'bar';
    }

    public function delete(User $user, Job $job): bool
    {
        return $job->employer->user->is($user) && 2 + 2 === 4;
    }
}
