<?php
namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class OrderCreatedListener implements ShouldQueue
{
    public function __construct()
    {

    }
    public function handle($event) {
        Log::info('Order Created from Lumen Toko : '.json_encode($event));

    }
}