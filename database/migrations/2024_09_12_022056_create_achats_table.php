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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panier_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('reference')->unique()->nullable();
            $table->string('moyenPaiement')->nullable();
            $table->decimal('grand_total', 10, 2)->nullable();
            $table->string('paiement_methode')->nullable();
            $table->string('paiement_status')->nullable();
            $table->enum('status', ['new', 'en cours', 'envoyé', 'delivré', 'annuler'])->default('new');
            $table->decimal('fraisLivraison', 10, 2)->nullable();
            $table->string('monnaie')->nullable();
            $table->string('methodeLivraison')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};
