<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * App\Build
 *
 * @property integer $id
 * @property string $started_at
 * @property string $finished_at
 * @property string $log
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $build_status_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Build[] $repositories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BuildRepository[] $build_repositories
 * @property-read \App\BuildStatus $status
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereStartedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereFinishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereLog($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Build whereBuildStatusId($value)
 * @mixin \Eloquent
 */
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

    public function status()
    {
        return $this->belongsTo(BuildStatus::class);
    }

    /**
     * @return Build
     */
    public static function getlatest()
    {
        return self::orderBy('created_at', 'desc')->firstOrFail();
    }

    /**
     * @return BuildStatus
     */
    public static function getLastStatus()
    {
        try {
            $build = self::getlatest();
            return $build->status;
        } catch (ModelNotFoundException $e) {
            return BuildStatus::whereCode(BuildStatus::NEVER)->first();
        }
    }

}
