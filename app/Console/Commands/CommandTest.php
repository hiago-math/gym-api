<?php

namespace App\Console\Commands;

use App\Models\AcademyTraining;
use App\Models\Status;
use App\Models\TypeStatus;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CommandTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       dd(TypeStatus::query()
           ->with('status')
           ->get()->toArray());
    }
}
