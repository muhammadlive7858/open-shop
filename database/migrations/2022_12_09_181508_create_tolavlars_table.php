<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTolavlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tolavlars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('taminotchi_id');
            $table->string('sum')->nullable();
            $table->string('dollor')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tolavlars');
    }
}
