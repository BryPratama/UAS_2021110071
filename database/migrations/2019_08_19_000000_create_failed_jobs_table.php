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
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('failed_jobs');
    }
};
