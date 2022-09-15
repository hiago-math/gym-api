<?php

namespace App\Console\Commands;

use App\Domain\Repositories\Tables\FunctionRepository;
use App\Domain\Repositories\Tables\PermissionRepository;
use App\Jobs\SyncFunctionXPermissionsJob;
use App\Models\Permissions;
use Illuminate\Console\Command;

class SyncFunctionXPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:function-permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for sync all permissions in function "DEUS SUPREMO"';

    private PermissionRepository $permissionRepository;
    private FunctionRepository $functionRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PermissionRepository $permissionRepository, FunctionRepository $functionRepository)
    {
        parent::__construct();
        $this->permissionRepository = $permissionRepository;
        $this->functionRepository = $functionRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $function = $this->functionRepository->findOneBy('level', 0);
        $this->permissionRepository->createModel()->chunk(100, function ($permissions) use ($function) {
            dispatch((new SyncFunctionXPermissionsJob($function, $permissions)));
        });
     $this->comment('Fila Dispachada, certifique-se está rodando! (php artisan queue:work)');
    }
}
