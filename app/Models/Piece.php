<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Piece
 *
 * @property int $id
 * @property string|null $name
 * @property int $composer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Composer $composer
 * @method static \Illuminate\Database\Eloquent\Builder|Piece newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Piece newQuery()
 * @method static \Illuminate\Database\Query\Builder|Piece onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Piece query()
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereComposerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piece whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Piece withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Piece withoutTrashed()
 * @mixin \Eloquent
 */
class Piece extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function composer()
    {
        return $this->belongsTo(Composer::class);
    }

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }
}
