<?php

namespace App;

use App\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use Encryptable;

    protected $encryptable = [
        'username',
        'credential'
    ];

    public function credential_domain()
    {
        return $this->belongsTo(CredentialDomain::class);
    }

    public function credential_type()
    {
        return $this->belongsTo(CredentialType::class);
    }


}
