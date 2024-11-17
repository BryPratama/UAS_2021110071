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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('code_transaksi');
<<<<<<< HEAD
            $table->string('sku_transaksi');
=======
<<<<<<< HEAD
            $table->string('sku_transaksi');
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
            $table->string('total_qty');
            $table->string('total_harga');
            $table->string('nama_customer');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('ekspedisi');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            $table->enum('status', ['Unpaid','Paid']);
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
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
        Schema::dropIfExists('transaksis');
    }
};
