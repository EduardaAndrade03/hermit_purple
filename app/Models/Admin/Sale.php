<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['name', 'client_id', 'product_id', 'quantity', 'total_price', 'payment_method', 'order_status', 'date'];
}
