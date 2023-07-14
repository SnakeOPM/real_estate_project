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
        Schema::create('flat_parties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('party_id');
            $table->unsignedBigInteger('flat_id');

            $table->index('party_id', 'flat_parties_party_idx');
            $table->index('flat_id', 'flat_parties_flats_idx');

            $table->foreign('party_id', 'flat_parties_party_fk')->on('parties')->references('id');
            $table->foreign('flat_id', 'flat_parties_flats_fk')->on('flats')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_parties');
    }
};
