<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableTypeStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_status', function (Blueprint $table) {
            $table->uuid('uid_status')->primary()->index();
            $table->string('type')->index()->nullable();

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_status');
    }
}
