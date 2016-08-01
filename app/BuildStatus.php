<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildStatus extends Model
{
    const KILLED = 'KILLED';
    const PENDING = 'PENDING';
    const RUNNING = 'RUNNING';
    const ERROR = 'ERROR';
    const SUCCESS = 'SUCCESS';

    protected $fillable = [
        'display_name',
        'short_display_name',
        'code'
    ];
}
