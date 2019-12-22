<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribes', function (Blueprint $table) {
            $table->bigIncrements('id');

                  $table->string('pname');
                 $table->string('age');
                  $table->string('appoint');
                 $table->string('dname');
                $table->string('med');
               $table->string('des');

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
        Schema::dropIfExists('prescribes');
    }
}
