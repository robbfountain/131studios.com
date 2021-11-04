<?php

namespace App\Events;

use App\Contract;
use App\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContractWasApproved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Contract
     */
    public Contract $contract;

    /**
     * @var User
     */
    public User $user;

    /**
     * Create a new event instance.
     *
     * @param  Contract  $contract
     * @param  User  $user
     */
    public function __construct(Contract $contract, User $user)
    {
        $this->contract = $contract;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
