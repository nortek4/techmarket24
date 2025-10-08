<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orders_items';

    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price'];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'quantity' => 'int'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getLineTotalAttribute(){
        return bcmul((string)$this->unit_price, (string)$this->quantity, 2);
    }
}
