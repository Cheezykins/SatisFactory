<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CredentialDomain extends Model
{
    protected $fillable = [
        'domain',
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
