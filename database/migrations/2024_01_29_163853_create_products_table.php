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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product',100);
            $table->text('description');
            $table->string('image',150);

            $table->tinyInteger('active')->nullable()->default(1);

            $table->foreignId('category_id')
            ->constrained('categories')
            ->onDelete('cascade');

            $table->foreignId('family_id')
            ->constrained('families')
            ->onDelete('cascade');

            $table->foreignId('group_id')
            ->constrained('groups')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
