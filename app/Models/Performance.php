<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Performance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function instrument()
    {
        return $this->belongsTo(Instrument::class);
    }

    public function ensemble()
    {
        return $this->belongsTo(Ensemble::class);
    }

    public function piece()
    {
        return $this->belongsTo(Piece::class);
    }

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
}
