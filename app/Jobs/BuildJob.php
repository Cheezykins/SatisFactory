<?php

namespace App\Jobs;

use App\Build;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuildJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $build;

    public function __construct(Build $build)
    {
        $this->build = $build;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

    }
}
