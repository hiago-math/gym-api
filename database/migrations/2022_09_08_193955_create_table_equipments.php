<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->uuid('uid_equipment')->primary()->index();
            $table->string('name')->index()->unique()->nullable(false);
            $table->string('img')->index()->unique()->nullable(false);

            $table->foreignUuid('uid_status')->constrained('status', 'uid_status');

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
        Schema::dropIfExists('equipament');
    }
}
