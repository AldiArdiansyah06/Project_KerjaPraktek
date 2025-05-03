<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('modul_id');
            $table->text('soal');
            $table->foreign('modul_id')->references('id')->on('moduls')->restrictOnDelete()->restrictOnUpdate();

            $table->string('opsi_a');
            $table->string('opsi_b');
            $table->string('opsi_c');
            $table->string('opsi_d');
            $table->char('jawaban_benar', 1);
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
