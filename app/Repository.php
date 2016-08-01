<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Repository
 *
 * @property-read \App\RepositoryType $repository_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\RepositoryInstallation[] $repository_installations
 * @property-read \App\Credential $credential
 * @property-read \App\User $user
 * @mixin \Eloquent
 * @property integer $id
 * @property string $namespace
 * @property string $name
 * @property string $url
 * @property integer $installation_count
 * @property integer $repository_type_id
 * @property integer $credential_id
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereNamespace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereInstallationCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereRepositoryTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereCredentialId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Repository whereUpdatedAt($value)
 */
class Repository extends Model
{
    public function repository_type()
    {
        return $this->belongsTo(RepositoryType::class);
    }

    public function repository_installations()
    {
        return $this->hasMany(RepositoryInstallation::class);
    }

    public function credential()
    {
        return $this->belongsTo(Credential::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function install()
    {
        $installation = new RepositoryInstallation();
        $this->repository_installations()->save($installation);
        $this->installation_count ++;
        $this->save();
    }

    public function build_repositories()
    {
        return $this->hasMany(BuildRepository::class);
    }

    public function builds()
    {
        return $this->hasManyThrough(Build::class, BuildRepository::class);
    }
}
