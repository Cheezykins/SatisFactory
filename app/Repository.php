<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
