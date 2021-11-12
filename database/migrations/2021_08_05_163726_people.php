<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable(false);
            $table->string('cpf')->unique()->nullable(false);
            $table->string('birthdate')->nullable(false);
            $table->string('phone')->nullable(false);;
            $table->boolean('status')->default(0)->nullable(false);
            $table->boolean('bio_sex')->nullable(false);
            $table->string('photo')->nullable(false);
            $table->unsignedBigInteger('address_id');

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at');

            $table->foreign('address_id')->references('id')->on('address');

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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['function_id']);
        });

        Schema::drop('users');
    }
}
