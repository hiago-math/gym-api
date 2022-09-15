<?php

namespace App\Jobs;

use App\Models\Functions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class SyncFunctionXPermissionsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Functions $function;
    private Collection $permissions;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Functions $function, Collection $permissions)
    {
        $this->function = $function;
        $this->permissions = $permissions;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->function->permissions()->sync($this->permissions);
    }
}
