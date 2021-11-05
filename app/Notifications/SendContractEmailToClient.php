<?php

namespace App\Notifications;

use App\Contract;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendContractEmailToClient extends Notification
{
    use Queueable;

    /**
     * @var Contract
     */
    public Contract $contract;
    public $url;

    /**
     * Create a new notification instance.
     *
     * @param  Contract  $contract
     * @param $url
     */
    public function __construct(Contract $contract, $url)
    {
        $this->contract = $contract;
        $this->url = $url;
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
            ->subject("{$this->contract->business_name} Quote and Service Contract from 131 Studios")
            ->greeting('Hello '.$this->contract->name)
            ->line('Thank you for giving us the opportunity to earn your business.')
            ->line('We have prepared a quote and contract for the project we have discussed.')
            ->line('Please click the link below to view and sign the contract.')
            ->action('View & Sign Contract', $this->url)
            ->line('If you have any further questions please don\'t hesitate to contact us at 301.992.0962')
            ->line('Thank you for your business');
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
