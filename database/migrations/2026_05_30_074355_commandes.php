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
        Schema::create('commandes', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('restaurants_id')->constrained('restaurants')->onDelete('cascade');
            $table->float('montant_C');
            $table->string('date_C');
            $table->enum('status',['en_attente','valider','refusee'])->default('en_attente');
            $table->string('adresseLivraison_C');
            $table->string('quantite_C');
            $table->foreignId('panier_id')->constrained('panier')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('commande_items', function(Blueprint $table){
            $table->id();
            $table->foreignId('commandes_id')->constrained('commandes')->onDelete('cascade');
            $table->foreignId('plats_id')->constrained('plats')->onDelete('cascade');
            $table->integer('quantite');
            $table->float('prix_unitaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
        Schema::dropIfExists('commande_items');
    }
};
