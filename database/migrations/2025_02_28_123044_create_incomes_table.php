<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->text('description');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
