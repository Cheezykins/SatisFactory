<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
