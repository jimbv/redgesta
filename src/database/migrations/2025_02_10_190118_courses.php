<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->integer('institucion');
            $table->string('denominacion');
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            $table->text('caracteristicas')->nullable();
            $table->string('duracion')->nullable();
            $table->text('requisitos')->nullable();
            $table->text('certificacion')->nullable();
            $table->text('modalidad')->nullable();
            $table->string('examen')->nullable();
            $table->text('programa_de_estudio')->nullable();
            $table->boolean('show_purchase_button')->default(false);
            $table->string('tipo')->nullable();
            $table->decimal('precio', 8, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('category_course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_course');
        Schema::dropIfExists('courses');
    }
};