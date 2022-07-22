<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Addproducts extends Model
{
    use HasFactory;
    use  Notifiable;
    protected $fillable=[

        'catid','pname','pimage','qty','price','pdescriptions'

    ];

    protected $table='addproducts';
}
