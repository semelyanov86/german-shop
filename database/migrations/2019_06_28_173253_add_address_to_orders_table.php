<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->enum('other_address', [0, 1])->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->integer('postindex')->nullable();
            $table->dropColumn('phone');
            $table->string('kuddennr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('other_address');
            $table->dropColumn('street');
            $table->dropColumn('city');
            $table->dropColumn('postindex');
            $table->string('phone');
        });
    }
}
