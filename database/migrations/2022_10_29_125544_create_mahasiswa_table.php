<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->char('npm', 0);
            $table->char('nidn', 0);
            $table->string('nama', 50);
            $table->timestamps();
                $table->primary('npm');

                $table->index('nidn');
                $table->foreign('nidn')->references('nidn')->on('dosen')
                ->onDelete('cascade')
                ->onUpdate('cascade');









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
