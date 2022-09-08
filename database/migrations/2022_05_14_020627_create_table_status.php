<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->uuid('uid_status')->primary()->index();
            $table->string('label')->index()->nullable(false);
            $table->string('name')->index()->nullable(false);
            $table->string('description');

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('status', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
