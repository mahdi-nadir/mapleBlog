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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inbox_id');
            $table->unsignedBigInteger('user1_id');
            $table->unsignedBigInteger('user2_id');
            // $table->unsignedBigInteger('user_communicating_id');
            $table->mediumText('content');
            // $table->string('content', 300);
            // $table->unsignedBigInteger('from_user_id');
            // $table->unsignedBigInteger('to_user_id');
            // $table->boolean('from_show')->default(true);
            // $table->boolean('to_show')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('inbox_id')->references('id')->on('inboxes')->onDelete('cascade');
            $table->foreign('user1_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user2_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('user_communicating_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('from_user_id')
            //     ->references('id')->on('users')
            //     ->cascadeOnDelete();

            // $table->foreign('to_user_id')
            //     ->references('id')->on('users')
            //     ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
