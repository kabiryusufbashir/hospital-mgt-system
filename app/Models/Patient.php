<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'fileNo',
        'name',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function salerecord()
    {
        return $this->hasMany(Salerecord::class);
    }
}
