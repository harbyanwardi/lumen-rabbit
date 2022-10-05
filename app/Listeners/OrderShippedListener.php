<?php
namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class OrderShippedListener implements ShouldQueue
{
    public $connection = "rabbitmq_direct";
    public function __construct()
    {

    }
    public function handle($event) {
        Log::info('Order Shipped from Lumen Toko : '.json_encode($event));

    }
}