<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'orderdetails';

    protected $primaryKey = ['orderNumber', 'productCode'];

    protected $keyType = 'string';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'orderNumber',
        'orderNumber',
        'quantityOrdered',
        'priceEach',
        'orderLineNumber'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productCode', 'productCode');
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'orderNumber', 'orderNumber');
    }
}