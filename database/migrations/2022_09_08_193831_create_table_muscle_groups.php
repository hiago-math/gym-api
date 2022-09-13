<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMuscleGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muscle_groups', function (Blueprint $table) {
            $table->uuid('uid_muscle_group')->primary()->index();
            $table->string('label')->unique()->index()->nullable(false);
            $table->string('name')->unique()->index()->nullable(false);
            $table->string('img')->unique()->index()->nullable();

            $table->foreignUuid('uid_academy_training')->constrained('academy_training', 'uid_academy_training');

            $table->dateTime('created_at')->useCurrent()->index();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate()->index();

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
        Schema::dropIfExists('muscle_groups');
    }
}
