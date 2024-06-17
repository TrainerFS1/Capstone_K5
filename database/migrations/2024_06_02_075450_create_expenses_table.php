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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->string('category');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->decimal('amount', 15, 2);
=======
            $table->decimal('amount', 10, 2);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $table->decimal('amount', 10, 2);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
