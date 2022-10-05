<?php

namespace App\Console\Commands;

use App\Models\Orders;
use Illuminate\Console\Command;

class ShippedOrder extends Command
{
    protected $name = 'shipped:order';
    protected $description = 'Shipped Order Data';

    public function handle()
    {
        
        $order = Orders::orderBy('id', 'desc')->first();

        event(new \App\Events\OrderShippedEvent($order));
    }
}