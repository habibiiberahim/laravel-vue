<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    
    protected $table = 'outlets';

    protected $guard= [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
