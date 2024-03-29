<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = ['customerNumber', 'checkNumber'];

    protected $keyType = 'string';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'customerNumber',
        'checkNumber',
        'paymentDate',
        'amount'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }
}