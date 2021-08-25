<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Functions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('level')->nullable(false);
            $table->unsignedBigInteger('academy_training_id');

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('academy_training_id')->references('id')->on('academy_training');

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
        Schema::table('functions', function (Blueprint $table) {
            $table->dropForeign(['academy_training_id']);
        });

        Schema::drop('functions');
    }
}
