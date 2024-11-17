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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('nama_product');
            $table->string('type');
            $table->string('kategory');
            $table->bigInteger('harga');
            $table->float('discount');
            $table->integer('quantity');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $table->integer('quantity_out')->default(0);
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
            $table->string('foto');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('products');
    }
};
