<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTavarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tavars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('image')->nullable();
            $table->string('taminotchi')->nullable();
            $table->string('bolim')->nullable();
            $table->string('count');
            $table->string('taminot_count');

            $table->string('chegirma')->nullable();
            $table->date('chegirma_date')->nullable();
            $table->string('desc')->nullable();
            $table->string('top')->nullable();

            $table->boolean('dollor')->nullable();
            $table->float('dollors')->nullable();

            $table->string('price');
            $table->string('shop_price');

            $table->integer('user_id')->nullable();
            $table->integer('parentuser_id')->nullable();

            $table->string('sum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tavars');
    }
}
