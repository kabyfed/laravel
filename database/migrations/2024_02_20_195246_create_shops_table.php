<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->string('store_code');
            $table->primary('store_code');
            $table->string('shop_name', 100);
            $table->string('name_of_locality');
            $table->foreign('name_of_locality')
            ->references('name_of_locality')
            ->on('localitys')
            ->onDelete('cascade');

            $table->string('address');
            $table->string('phone_number');
            $table->string('director');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropForeign(['name_of_locality']);
            $table->dropColumn('name_of_locality');
        });
        Schema::dropIfExists('shops');
    }
};
