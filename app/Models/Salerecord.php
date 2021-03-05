<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salerecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'accountant_id',
        'amount',
        'quantity',
        'discount',
        'grossTotal',
        'salesType',
        'paymentMethod',
        'paymentStatus',
    ];

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    //The Accountant
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
