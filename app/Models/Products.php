<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Products extends Model
{
    use HasApiTokens;
    use HasFactory;
    use  Notifiable;
    protected $fillable=[

       'name','details'

    ];

    protected $table='products';
}
