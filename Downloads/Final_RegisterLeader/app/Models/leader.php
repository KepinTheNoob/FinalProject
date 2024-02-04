<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fullname',
        'place',
        'date',
        'email',
        'number',
        'id_line',
        'github',
        'cv',
        'id_card'
    ];
}
