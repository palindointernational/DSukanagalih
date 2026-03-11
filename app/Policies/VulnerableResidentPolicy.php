<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\VulnerableResident;
use Illuminate\Auth\Access\HandlesAuthorization;

class VulnerableResidentPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:VulnerableResident');
    }

    public function view(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('View:VulnerableResident');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:VulnerableResident');
    }

    public function update(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('Update:VulnerableResident');
    }

    public function delete(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('Delete:VulnerableResident');
    }

    public function restore(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('Restore:VulnerableResident');
    }

    public function forceDelete(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('ForceDelete:VulnerableResident');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:VulnerableResident');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:VulnerableResident');
    }

    public function replicate(AuthUser $authUser, VulnerableResident $vulnerableResident): bool
    {
        return $authUser->can('Replicate:VulnerableResident');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:VulnerableResident');
    }

}