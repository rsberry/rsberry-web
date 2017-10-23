<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('item_id_1')->nullable()->default(null);
            $table->integer('item_quantity_1')->nullable()->default(null);
            $table->integer('item_id_2')->nullable()->default(null);
            $table->integer('item_quantity_2')->nullable()->default(null);
            $table->integer('item_id_3')->nullable()->default(null);
            $table->integer('item_quantity_3')->nullable()->default(null);
            $table->integer('item_id_4')->nullable()->default(null);
            $table->integer('item_quantity_4')->nullable()->default(null);
            $table->integer('item_id_5')->nullable()->default(null);
            $table->integer('item_quantity_5')->nullable()->default(null);
            $table->integer('item_id_6')->nullable()->default(null);
            $table->integer('item_quantity_6')->nullable()->default(null);
            $table->integer('item_id_7')->nullable()->default(null);
            $table->integer('item_quantity_7')->nullable()->default(null);
            $table->integer('item_id_8')->nullable()->default(null);
            $table->integer('item_quantity_8')->nullable()->default(null);
            $table->integer('item_id_9')->nullable()->default(null);
            $table->integer('item_quantity_9')->nullable()->default(null);
            $table->integer('item_id_10')->nullable()->default(null);
            $table->integer('item_quantity_10')->nullable()->default(null);
            $table->integer('item_id_11')->nullable()->default(null);
            $table->integer('item_quantity_11')->nullable()->default(null);
            $table->integer('item_id_12')->nullable()->default(null);
            $table->integer('item_quantity_12')->nullable()->default(null);
            $table->integer('item_id_13')->nullable()->default(null);
            $table->integer('item_quantity_13')->nullable()->default(null);
            $table->integer('item_id_14')->nullable()->default(null);
            $table->integer('item_quantity_14')->nullable()->default(null);
            $table->integer('item_id_15')->nullable()->default(null);
            $table->integer('item_quantity_15')->nullable()->default(null);
            $table->integer('item_id_16')->nullable()->default(null);
            $table->integer('item_quantity_16')->nullable()->default(null);
            $table->integer('item_id_17')->nullable()->default(null);
            $table->integer('item_quantity_17')->nullable()->default(null);
            $table->integer('item_id_18')->nullable()->default(null);
            $table->integer('item_quantity_18')->nullable()->default(null);
            $table->integer('item_id_19')->nullable()->default(null);
            $table->integer('item_quantity_19')->nullable()->default(null);
            $table->integer('item_id_20')->nullable()->default(null);
            $table->integer('item_quantity_20')->nullable()->default(null);
            $table->integer('item_id_21')->nullable()->default(null);
            $table->integer('item_quantity_21')->nullable()->default(null);
            $table->integer('item_id_22')->nullable()->default(null);
            $table->integer('item_quantity_22')->nullable()->default(null);
            $table->integer('item_id_23')->nullable()->default(null);
            $table->integer('item_quantity_23')->nullable()->default(null);
            $table->integer('item_id_24')->nullable()->default(null);
            $table->integer('item_quantity_24')->nullable()->default(null);
            $table->integer('item_id_25')->nullable()->default(null);
            $table->integer('item_quantity_25')->nullable()->default(null);
            $table->integer('item_id_26')->nullable()->default(null);
            $table->integer('item_quantity_26')->nullable()->default(null);
            $table->integer('item_id_27')->nullable()->default(null);
            $table->integer('item_quantity_27')->nullable()->default(null);
            $table->integer('item_id_28')->nullable()->default(null);
            $table->integer('item_quantity_28')->nullable()->default(null);
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
        Schema::dropIfExists('inventories');
    }
}
