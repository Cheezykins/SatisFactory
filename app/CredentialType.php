<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CredentialType extends Model
{
    protected $fillable = [
        'type',
        'display_name',
        'default'
    ];

    public function credentials()
    {
        return $this->hasMany(Credential::class);
    }

    public static function getDefault()
    {
        return self::where('default', true)->firstOrFail();
    }
}
