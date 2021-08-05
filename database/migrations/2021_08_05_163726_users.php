<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable(false);
            $table->string('cpf')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('birthday')->nullable(false);
            $table->string('phone');
            $table->unsignedBigInteger('function_id');
            $table->unsignedBigInteger('adrress_id');

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('function_id')->references('id')->on('functions');
            $table->foreign('adrress_id')->references('id')->on('adrress');

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
            $table->dropForeign([
                'function_id',
                'adrress_id'
            ]);
        });

        Schema::drop('users');
    }
}
