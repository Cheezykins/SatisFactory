<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepositoryInstallation extends Model
{
    public function repository()
    {
        return $this->belongsTo(Repository::class);
    }
}
