<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
    /**
     * Run the migrations.
     */
=======
<<<<<<< HEAD
    /**
     * Run the migrations.
     */
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    public function up(): void
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

<<<<<<< HEAD
    /**
     * Reverse the migrations.
     */
=======
<<<<<<< HEAD
    /**
     * Reverse the migrations.
     */
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
