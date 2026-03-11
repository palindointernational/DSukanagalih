<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DonationRegistration;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonationRegistrationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DonationRegistration');
    }

    public function view(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('View:DonationRegistration');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DonationRegistration');
    }

    public function update(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('Update:DonationRegistration');
    }

    public function delete(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('Delete:DonationRegistration');
    }

    public function restore(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('Restore:DonationRegistration');
    }

    public function forceDelete(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('ForceDelete:DonationRegistration');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DonationRegistration');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DonationRegistration');
    }

    public function replicate(AuthUser $authUser, DonationRegistration $donationRegistration): bool
    {
        return $authUser->can('Replicate:DonationRegistration');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DonationRegistration');
    }

}