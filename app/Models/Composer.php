<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Composer
 *
 * @property int $id
 * @property string $name
 * @property string $genre
 * @property string|null $year_of_birth
 * @property string|null $year_of_death
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Piece[] $pieces
 * @property-read int|null $pieces_count
 * @method static \Illuminate\Database\Eloquent\Builder|Composer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composer newQuery()
 * @method static \Illuminate\Database\Query\Builder|Composer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Composer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereYearOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composer whereYearOfDeath($value)
 * @method static \Illuminate\Database\Query\Builder|Composer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Composer withoutTrashed()
 * @mixin \Eloquent
 */
class Composer extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function pieces()
    {
        return $this->hasMany(Piece::class);
    }
}
