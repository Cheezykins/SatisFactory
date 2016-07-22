<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CredentialDomain
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Credential[] $credentials
 * @mixin \Eloquent
 * @property integer $id
 * @property string $domain
 * @property string $display_name
 * @property boolean $default
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereDomain($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereDefault($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialDomain whereUpdatedAt($value)
 */
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
