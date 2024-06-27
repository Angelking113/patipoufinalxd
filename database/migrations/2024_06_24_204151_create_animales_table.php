<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('edad')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('animales');
    }
};
