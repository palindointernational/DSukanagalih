<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;

class DonationRegistered extends Notification implements ShouldBroadcast
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $registration)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable) {}

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Pendaftar Donasi Baru',
            'donation_id' => $this->registration->donation_id,
            'registration_id' => $this->registration->id,
        ];
    }

    public function toDatabase(User $notifiable): array
    {
        return [
            'title' => 'Pendaftar Donasi Baru',
            'body' => 'Ada Donasi baru Masuk',
            'registration_id' => $this->registration->id
        ];
    }
}
