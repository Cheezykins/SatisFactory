<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
