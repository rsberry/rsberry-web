<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 63);
            $table->string('description', 127);
            $table->tinyInteger('is_note')->default(0);
            $table->integer('note_item_id')->nullable()->default(null);
            $table->integer('is_stackable')->default(0);
            $table->integer('is_tradable')->default(0);
            $table->integer('is_two_handed')->default(0);
            $table->integer('is_sellable')->default(0);
            $table->integer('value_shop')->default(0);
            $table->integer('value_low_alchemy')->default(0);
            $table->integer('value_high_alchemy')->default(0);
            $table->integer('bonus_attack_stab')->default(0);
            $table->integer('bonus_attack_slash')->default(0);
            $table->integer('bonus_attack_crush')->default(0);
            $table->integer('bonus_attack_magic')->default(0);
            $table->integer('bonus_attack_range')->default(0);
            $table->integer('bonus_defence_stab')->default(0);
            $table->integer('bonus_defence_slash')->default(0);
            $table->integer('bonus_defence_crush')->default(0);
            $table->integer('bonus_defence_magic')->default(0);
            $table->integer('bonus_defence_range')->default(0);
            $table->integer('bonus_strength')->default(0);
            $table->integer('bonus_prayer')->default(0);
            $table->string('comments', 1024)->nullable()->default(null);
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
        Schema::dropIfExists('items');
    }
}
