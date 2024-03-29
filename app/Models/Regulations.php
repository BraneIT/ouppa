<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulations extends Model
{
    use HasFactory;
    protected $table = 'regulations';
    protected $fillable = ['name', 'file', 'slug'];
    
}
