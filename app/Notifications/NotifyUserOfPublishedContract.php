<?php

namespace App\Notifications;

use App\Contract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyUserOfPublishedContract extends Notification
{
    use Queueable;

    /**
     * @var Contract
     */
    public Contract $contract;

    /**
     * Create a new notification instance.
     *
     * @param Contract $contract
     */
    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('['.config('app.name').']' . 'Service Contract for ' . $this->contract->business_name)
                    ->greeting('Hi ' . $this->contract->name)
                    ->line('131 Studios is pleased to present ' . $this->contract->business_name . ' with a contract for service.')
                    ->line('Please use the link below to view the proposal and sign the contract.')
                    ->action('View & Sign ', $this->contract->signed_url)
                    ->line('Thank you for allowing us to serve you.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
