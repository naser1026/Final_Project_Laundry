<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('list_id_package');
            $table->string('list_count');
            $table->bigInteger('id_parfum')->unsigned();
            $table->bigInteger('id_customer')->unsigned();
            $table->enum('order_status', ['Antrian','Siap Ambil'])->default('Antrian');
            // $table->string('created_by');
            $table->enum('payment_status', ['Belum Bayar','Lunas'])->default('Belum Bayar');
            $table->enum('payment_type', ['Tunai','NonTunai'])->default(null);
            $table->bigInteger('id_discount')->unsigned()->nullable();
            $table->integer('total_price');
            $table->text('information')->nullable();
            $table->timestamps();

            $table->foreign('id_discount')->references('id')->on('discounts')->onDelete('cascade');
            $table->foreign('id_parfum')->references('id')->on('parfums')->onDelete('cascade');
            // $table->foreign('id_custumer')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
