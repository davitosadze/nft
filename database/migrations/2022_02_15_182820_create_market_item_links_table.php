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
        Schema::create('market_item_links', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('item_id')->unsigned()->nullable();
            $table->foreign('item_id')->references('id')->on('market_items');

            $table->bigInteger('platform_id')->unsigned()->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms');

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
        Schema::dropIfExists('market_item_links');
    }
};
