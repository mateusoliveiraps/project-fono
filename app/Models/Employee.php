<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model implements User
{
    use HasFactory;
    protected $fillable = [
        'email', 'password'
    ];

    public function office() {
        return $this->belongsTo(Office::class);
    }
}
