<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',8,2)->default(0.00);
            $table->integer('cours_id');
            $table->string('status')->default('Kutilmoqda');
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('orders');
    }
};
