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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('details')->nullable();
            $table->boolean('etat')->default(false);
            $table->enum('priorite', ['top priority', 'very high priority', 'high priority', 'normal priority', 'low priority'])->default('normal priority');
            $table->foreignId('id_user')->constrained("users")->onDelete('cascade');
            $table->foreignId('id_projet')->constrained("projets")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
