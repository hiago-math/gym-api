<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableTypeStatusXStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_status_x_status', function (Blueprint $table) {
            $table->foreignUuid('uid_type')->constrained('type_status','uid_type');
            $table->foreignUuid('uid_status')->constrained('status','uid_status');

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
        Schema::table('type_status_x_status', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
