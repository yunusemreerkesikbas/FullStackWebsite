<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStockStatusFromProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('stock_status');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('stock_status')->default('in_stock');
        });
    }
}
