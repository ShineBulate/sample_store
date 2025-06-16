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
            $table->string('buyer_fullname');
            $table->boolean('order_status')->default(0);
            $table->text('buyer_comment');

            $table->unsignedBigInteger('product_id');

            $table->index('product_id','order_product_idx');

            $table->foreign('product_id', 'order_product_fk')->references('id')->on('products');

            $table->timestamps();
            $table->softDeletes();

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
