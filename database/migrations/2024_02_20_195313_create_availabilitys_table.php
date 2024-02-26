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
        Schema::create('availabilitys', function (Blueprint $table) {
            $table->string('name_of_shop');
            $table->foreign('name_of_shop')
            ->references('name_of_locality')
            ->on('shops')
            ->onDelete('cascade');

            $table->string('name_of_product');
            $table->foreign('name_of_product')
            ->references('name_of_product')
            ->on('products')
            ->onDelete('cascade');

            $table->string('available_in_stock'); //!!!
            $table->primary(['name_of_product', 'name_of_shop','available_in_stock']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('availabilitys', function (Blueprint $table) {
            $table->dropForeign(['name_of_shop']);
            $table->dropColumn('name_of_shop');

            $table->dropForeign(['name_of_product']);
            $table->dropColumn('name_of_product');
        });
        Schema::dropIfExists('availabilitys');
    }
};
