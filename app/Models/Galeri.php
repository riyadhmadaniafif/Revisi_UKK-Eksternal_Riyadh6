<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Http\Controller\GaleriController;

class Galeri extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];
}
