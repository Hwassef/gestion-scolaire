<?php

namespace App\Events;

use App\Models\DepartmentAdmin;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewDepartmentAdminEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $departmentAdmin;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(DepartmentAdmin $departmentAdmin)
    {
        $this -> departmentAdmin = $departmentAdmin;
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
