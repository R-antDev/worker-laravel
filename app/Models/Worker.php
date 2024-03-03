<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'location',
        'number',
        'father_name',
        'mother_name',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


}
