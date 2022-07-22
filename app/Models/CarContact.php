<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CarContact extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable=[

        'firstname','lastname','name','email','phone','subject','message'

    ];

    protected $table="tbl_contacts";
}
