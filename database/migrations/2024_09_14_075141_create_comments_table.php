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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
        $table->foreignId('produit_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->enum('like', array('0','1'))->nullable();
            $table->text('message')->nullable();
            $table->string('nombres')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
