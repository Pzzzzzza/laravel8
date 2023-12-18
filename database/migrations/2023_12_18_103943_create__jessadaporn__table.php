<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJessadapornTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jessadaporn', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('GOOD')->nullable();
            $table->float('GOOD1')->nullable();
            $table->string('GOOD2')->nullable();
            $table->date('GOOD3')->nullable();
            $table->text('GOOD4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jessadaporn');
    }
}
