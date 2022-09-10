<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tercero extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tercero';
    public function naturales()
    {
        return $this->hasMany(Natural::class, 'id_tercero', 'id_tercero');
    }

    public function juridicas()
    {
        return $this->hasMany(Juridica::class, 'id_tercero', 'id_tercero');
    }
}
