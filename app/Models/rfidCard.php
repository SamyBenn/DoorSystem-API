<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfidCard extends Model
{
    use HasFactory;

    protected $table = "RfidCards";
    protected $hidden = ['id'];
    
    protected $fillable = [
        'uid'
    ];

}
