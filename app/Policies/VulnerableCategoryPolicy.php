<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\VulnerableCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class VulnerableCategoryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:VulnerableCategory');
    }

    public function view(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('View:VulnerableCategory');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:VulnerableCategory');
    }

    public function update(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('Update:VulnerableCategory');
    }

    public function delete(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('Delete:VulnerableCategory');
    }

    public function restore(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('Restore:VulnerableCategory');
    }

    public function forceDelete(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('ForceDelete:VulnerableCategory');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:VulnerableCategory');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:VulnerableCategory');
    }

    public function replicate(AuthUser $authUser, VulnerableCategory $vulnerableCategory): bool
    {
        return $authUser->can('Replicate:VulnerableCategory');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:VulnerableCategory');
    }

}