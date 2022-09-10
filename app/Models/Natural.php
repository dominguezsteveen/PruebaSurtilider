<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Natural extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(Tercero::class, 'id_tercero', 'id_tercero');
    }
}
