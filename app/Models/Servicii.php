<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicii extends Model
{
    use HasFactory;
    protected $fillable=["titlu", "descriere", "imagine"];
}
