<?php
namespace App\Events;
use App\Models\Orders;

class OrderCreatedEvent extends Event {
    public $order;

    public function __construct(Orders $order) {
        $this->order = $order;
    }
}