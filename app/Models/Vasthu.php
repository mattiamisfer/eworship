<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vasthu extends Model
{
    use HasFactory;
    protected $fillable= ['title','url','image','sort_order','status'];

}
