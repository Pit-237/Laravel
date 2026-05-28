<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponenteModel extends Model
{
    use HasFactory;
    protected $table = 'componente';
    protected $fillable = ['nome', 'data_inicio', 'data_fim'];
}
