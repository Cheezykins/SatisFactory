<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{

    public function repositories()
    {
        return $this->hasManyThrough(Build::class, BuildRepository::class);
    }

    public function build_repositories()
    {
        return $this->hasMany(BuildRepository::class);
    }

}
