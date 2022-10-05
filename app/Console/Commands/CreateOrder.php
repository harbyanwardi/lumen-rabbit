<?php

namespace App\Console\Commands;

use App\Models\Orders;
use Illuminate\Console\Command;

class CreateOrder extends Command
{
    protected $name = 'create:order';
    protected $description = 'Create Order Data';

    public function handle()
    {
        $data = [
            "user_id" => 1,
            "product_name" => "Odol",
            "quantity" => 2,
            "total_price" =>20000
        ];
        $order = Orders::create($data);

        event(new \App\Events\OrderCreatedEvent($order));
    }
}