<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTablePhonesAcademy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones_academy', function (Blueprint $table) {
            $table->uuid('uid_phone')->primary()->index();
            $table->string('phone_number')->unique()->index()->nullable(false);

            $table->foreignUuid('uid_academy_training')->constrained('academy_training', 'uid_academy_training');

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
        Schema::table('phones_academy', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
