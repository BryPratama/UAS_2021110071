<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_carts', function (Blueprint $table) {
            $table->id();
            $table->string('idUser');
            $table->unsignedBigInteger('id_barang');
            $table->integer('qty');
            $table->bigInteger('price');
            $table->integer('status')->default(0);
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('products');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_carts');
    }
};
