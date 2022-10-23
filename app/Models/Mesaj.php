<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Mesaj extends Model
{
    use HasFactory, Sortable;

    protected $sortable = [ 'titlu', 'created_at' ];
}
