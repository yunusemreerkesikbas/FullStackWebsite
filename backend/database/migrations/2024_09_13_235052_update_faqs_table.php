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
        Schema::table('faqs', function (Blueprint $table) {
            // name sütununu question olarak değiştiriyoruz
            $table->renameColumn('name', 'question');

            // description sütununu answer olarak değiştiriyoruz
            $table->renameColumn('description', 'answer');

            // status sütununu siliyoruz
            $table->dropColumn('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faqs', function (Blueprint $table) {
            // rollback işlemi: question sütununu name olarak geri değiştiriyoruz
            $table->renameColumn('question', 'name');

            // rollback işlemi: answer sütununu description olarak geri değiştiriyoruz
            $table->renameColumn('answer', 'description');

            // rollback işlemi: status sütununu geri ekliyoruz
            $table->boolean('status')->default(1);
        });
    }
};
