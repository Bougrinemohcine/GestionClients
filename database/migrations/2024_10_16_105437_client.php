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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Name of the client
            $table->string('email')->unique();  // Email of the client
            $table->string('address');  // Simple address field
            $table->string('telephone')->nullable();  // Telephone field
            $table->string('website')->nullable();  // Website field
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');  // Foreign key linking to the admin
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        
    }
};
