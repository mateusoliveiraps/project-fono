<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model implements User
{
    use HasFactory;
    protected $fillable=[
        'responsible_name', 'responsible_cpf'
    ];
}
