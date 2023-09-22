<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('address');
            $table->smallInteger('rooms_count');
            $table->smallInteger('square')->nullable();
            $table->integer('price');
            $table->boolean('pets')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('agency_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->boolean('is_occupied')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index('type_id', 'flat_flat_type_idx');
            $table->foreign('type_id', 'flat_flat_type_fk')->on('flat_types')->references('id');

            $table->index('agency_id', 'flat_agency_idx');
            $table->foreign('agency_id', 'flat_agency_fk')->on('agencies')->references('id');

            $table->index('owner_id', 'flat_user_idx');
            $table->foreign('owner_id', 'flat_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
    }
};
