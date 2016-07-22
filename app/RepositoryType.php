<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RepositoryType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Repository[] $repositories
 * @mixin \Eloquent
 * @property integer $id
 * @property string $type
 * @property string $display_name
 * @property boolean $default
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereDefault($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryType whereUpdatedAt($value)
 */
class RepositoryType extends Model
{
    protected $fillable = [
        'type',
        'display_name',
        'default'
    ];

    public function repositories()
    {
        return $this->hasMany(Repository::class);
    }

    public static function getDefault()
    {
        return self::where('default', true)->firstOrFail();
    }
}
