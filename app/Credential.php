<?php

namespace App;

use App\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Credential
 *
 * @property-read \App\CredentialDomain $credential_domain
 * @property-read \App\CredentialType $credential_type
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $credential_type_id
 * @property integer $credential_domain_id
 * @property string $username
 * @property string $credential
 * @property string $display_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereCredentialTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereCredentialDomainId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereCredential($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Credential whereUpdatedAt($value)
 */
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
