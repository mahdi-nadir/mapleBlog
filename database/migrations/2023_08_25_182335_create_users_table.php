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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger("role_id");
            $table->string('password');
            $table->unsignedBigInteger("imgUser_id");
            $table->unsignedBigInteger("gender_id");
            $table->date("date_of_birth");
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger("system_id");
            $table->unsignedBigInteger("diploma_id");
            $table->unsignedBigInteger("noc_id");
            $table->integer("eligibility_score")->default(0)->max(100)->min(0);
            $table->integer("crs_score")->default(0)->max(1200)->min(0);
            $table->unsignedBigInteger("step_id");
            $table->boolean("is_banned")->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')
                ->references('id')->on('countries');
            // ->cascadeOnDelete();

            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->cascadeOnDelete();

            $table->foreign('system_id')
                ->references('id')->on('systems')
                ->cascadeOnDelete();

            $table->foreign('diploma_id')
                ->references('id')->on('diplomas')
                ->cascadeOnDelete();

            $table->foreign('imgUser_id')
                ->references('id')->on('img_users')
                ->cascadeOnDelete();

            $table->foreign('noc_id')
                ->references('id')->on('nocs')
                ->cascadeOnDelete();

            $table->foreign('step_id')
                ->references('id')->on('steps')
                ->cascadeOnDelete();

            $table->foreign('gender_id')
                ->references('id')->on('genders')
                ->cascadeOnDelete();
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
