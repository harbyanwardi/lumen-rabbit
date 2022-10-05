<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $primaryKey = "id";
    protected $fillable = [
        "user_id",
        "product_name",
        "quantity",
        "total_price"
    ];
}