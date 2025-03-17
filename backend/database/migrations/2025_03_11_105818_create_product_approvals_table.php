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
        Schema::create('product_approvals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('new_name')->nullable();
            $table->decimal('new_price')->nullable();
            $table->integer('new_stock')->nullable();
            $table->string('brand')->nullable();
            $table->string('new_brand')->nullable();
            $table->text('description')->nullable();
            $table->text('new_description')->nullable();
            $table->enum('type',['modification', 'addition']);
            $table->string('approved_by')->nullable();
            $table->enum('status' , ['pending', 'approved', 'rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_approvals');
    }
};
