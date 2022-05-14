<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('uid_people')->primary()->index();
            $table->string('full_name')->nullable(false)->index();
            $table->string('cpf')->unique()->nullable(false)->index();
            $table->string('password')->nullable(false);
            $table->string('birthday')->nullable(false)->index();
            $table->string('phone')->nullable(false)->index();
            $table->string('status')->nullable(false);
            $table->foreignUuid('uid_address')->constrained('address', 'uid_address');

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
        Schema::dropIfExists('people');
    }
}
