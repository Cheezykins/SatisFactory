<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CredentialType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Credential[] $credentials
 * @mixin \Eloquent
 * @property integer $id
 * @property string $type
 * @property string $display_name
 * @property boolean $default
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereDefault($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CredentialType whereUpdatedAt($value)
 */
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
