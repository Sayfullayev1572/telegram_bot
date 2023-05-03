<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'addres', 'email', 'phone', 'status'];

    

    //protected $guarded = [];

    //protected $table = 'teachers';
    //protected $primaryKey = 'flight_id';

    //protected $dateFormat = 'U';

    // const NAME = 'ism';
    // const UPDATED_AT = 'updated_date';

    // protected $attributes = [
    //     'stastus' => 5,
    //     'name'=> "Jahongir",
    // ];
}
