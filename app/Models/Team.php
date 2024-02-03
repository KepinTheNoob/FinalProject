<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';
    protected $fillable =[
        'team_name',
        'name_leader',
        'profile_leader',
        'name_member',
        'profile_member',
    ];
}
