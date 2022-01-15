<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karirs', function (Blueprint $table) {
            $table->id("ID_KARIR");
            $table->string("TITLE");
            $table->string("NAME");
            $table->string("LOCATION");
            $table->date("END_DATE");
            $table->string("IMG_PATH");
            $table->text("DESC");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karirs');
    }
}
