<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWorkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout', function (Blueprint $table) {
            $table->uuid('uid_workout')->primary()->index();
            $table->string('name')->index()->unique()->nullable(false);
            $table->string('description')->index()->unique()->nullable();
            $table->string('gif_example')->index()->unique()->nullable();

            $table->foreignUuid('uid_workout_type')->constrained('workout_type', 'uid_workout_type');
            $table->foreignUuid('uid_muscle')->constrained('muscles', 'uid_muscle');
            $table->foreignUuid('uid_equipment')->constrained('equipments', 'uid_equipment');

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
        Schema::dropIfExists('workout');
    }
}
