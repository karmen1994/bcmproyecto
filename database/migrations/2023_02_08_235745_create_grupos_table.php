<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            // constraint gru_aul_fk foreign key (aula) references aulas(id)
                $table->string('nombre');
                $table->string('turno');
                $table->unsignedBigInteger('aula_id');
    
                $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
                
                //faltan las foraneas
    
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
        Schema::dropIfExists('grupos');
    }
};
