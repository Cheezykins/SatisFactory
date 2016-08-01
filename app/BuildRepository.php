<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BuildRepository
 *
 * @property integer $id
 * @property integer $build_id
 * @property integer $repository_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Build $build
 * @property-read \App\Repository $repository
 * @method static \Illuminate\Database\Query\Builder|\App\BuildRepository whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildRepository whereBuildId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildRepository whereRepositoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildRepository whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BuildRepository whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BuildRepository extends Model
{
    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    public function repository()
    {
        return $this->belongsTo(Repository::class);
    }
}
