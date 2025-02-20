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
        Schema::create('role_utilisateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs', 'id');
            $table->foreignId('roles_id')->constrained('roles', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_utilisateurs');
    }
};
