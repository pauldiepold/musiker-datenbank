<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instrument extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded;

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
