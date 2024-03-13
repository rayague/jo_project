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
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->date('rdv_date');
            $table->string('user_name')->nullable();// Ajoutez cette ligne pour référencer l'utilisateur
            $table->string('rdv_hour');
            $table->string('rdv_description');
            $table->string('pack');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvouses');
    }
};