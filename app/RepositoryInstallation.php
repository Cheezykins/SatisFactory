<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RepositoryInstallation
 *
 * @property-read \App\Repository $repository
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $repository_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryInstallation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryInstallation whereRepositoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryInstallation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepositoryInstallation whereUpdatedAt($value)
 */
class RepositoryInstallation extends Model
{
    public function repository()
    {
        return $this->belongsTo(Repository::class);
    }
}
