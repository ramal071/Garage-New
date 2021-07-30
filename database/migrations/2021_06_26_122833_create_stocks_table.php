<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('quantity');
            $table->string('dealer');
            $table->decimal('dealer_price', $precision = 8, $scale = 2);
            $table->decimal('selling_price', $precision = 8, $scale = 2);
            $table->float('discount')->default(0);
            $table->json('description');
            $table->boolean('is_damage')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
