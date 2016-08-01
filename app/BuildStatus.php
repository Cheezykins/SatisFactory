<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BuildStatus
 *
 * @property integer $id
 * @property string $display_name
 * @property string $short_display_name
 * @property string $code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Build[] $builds
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereShortDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BuildStatus extends Model
{
    const KILLED = 'KILLED';
    const PENDING = 'PENDING';
    const RUNNING = 'RUNNING';
    const ERROR = 'ERROR';
    const SUCCESS = 'SUCCESS';
    const NEVER = 'NEVER';

    protected $fillable = [
        'display_name',
        'short_display_name',
        'code'
    ];

    public function builds()
    {
        return $this->hasMany(Build::class);
    }
}
