<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
       Schema::create('chats', function (Blueprint $table) {
        $table->id('chat_id');
        $table->foreignId('medico_id')->constrained('medicos', 'medico_id')->onDelete('cascade');
        $table->foreignId('paciente_id')->constrained('pacientes', 'paciente_id')->onDelete('cascade');
        $table->string('orl');
        $table->timestamp('last_updated')->nullable();
        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
