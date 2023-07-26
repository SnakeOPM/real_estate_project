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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->unsignedBigInteger('avatar_id');
            $table->text('description')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->smallInteger('user_type_id')->nullable();
            $table->unsignedBigInteger('party_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index('avatar_id', 'user_avatar_id_idx');
            $table->foreign('avatar_id', 'user_avatar_id_fk')->on('user_avatars')->references('id');

            $table->index('user_type_id', 'user_user_type_idx');
            $table->foreign('user_type_id', 'user_user_type_fk')->on('user_types')->references('id');

            $table->index('party_id', 'user_party_id_idx');
            $table->foreign('party_id', 'user_party_id_fk')->on('parties')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
