<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableAcademyTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_training', function (Blueprint $table) {
            $table->uuid('uid_academy_training')->index()->primary();
            $table->string("name")->index()->nullable(false);
            $table->string("fantasy_name")->index()->nullable(false);
            $table->string("cnpj")->unique()->index()->nullable(false);

            $table->foreignUuid('uid_address')->constrained('address','uid_address');

            $table->dateTime('created_at')->useCurrent()->index();
            $table->dateTime('updated_at')->useCurrent()->index();

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
        Schema::dropIfExists('academy_training');
    }
}
