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
     Schema::create('realisations', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('category')->nullable();
        $table->string('file_path')->nullable(); // chemin vers le fichier (image, vidéo, pdf...)
        $table->string('file_type')->nullable(); // type de fichier (ex: 'image', 'video', 'pdf', etc.)

        $table->timestamps();
     });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
