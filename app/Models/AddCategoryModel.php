<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class AddCategoryModel extends Model
{
    use HasFactory;
    use  Notifiable;
    protected $fillable=[

        'catname','catdescriptions'

    ];

    protected $table='tbl_addcategories';
}
