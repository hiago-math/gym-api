<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AcademyTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_training', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("fantasy_name");
            $table->string("cnpj");
            $table->unsignedBigInteger("address_id");

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

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
        Schema::table('academy_training', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
        });

        Schema::drop('academy_training');
    }
}
