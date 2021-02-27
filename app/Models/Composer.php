<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composer extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
}
