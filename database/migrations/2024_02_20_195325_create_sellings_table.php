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
        Schema::create('sellings', function (Blueprint $table) {
            $table->integer('sales_code')->unique();
            $table->primary('sales_code');
            $table->string('check_number');
            $table->date('date');
            $table->integer('amount');

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

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sellings', function (Blueprint $table) {
            $table->dropForeign(['name_of_shop']);
            $table->dropColumn('name_of_shop');

            $table->dropForeign(['name_of_product']);
            $table->dropColumn('name_of_product');
        });
        Schema::dropIfExists('availabilitys');
    }
};
