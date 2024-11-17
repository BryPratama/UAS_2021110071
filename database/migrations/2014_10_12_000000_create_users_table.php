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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $table->string('nik');
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
            $table->boolean('is_admin')->default(1);
            $table->boolean('is_mamber')->default(0);
            $table->string('foto')->default('default.png');
            $table->string('alamat');
            $table->string('tlp');
            $table->date('tgllahir');
<<<<<<< HEAD
=======
=======
            $table->integer('is_admin')->default(1);
            $table->boolean('is_mamber')->default(1);
            $table->string('foto')->default('default.png');
            $table->string('alamat');
            $table->string('tlp');
            $table->date('tglLahir');
            $table->boolean('is_active')->default(1);
            $table->integer('role');
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
