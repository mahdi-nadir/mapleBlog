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
            $table->unsignedBigInteger("role_id")->default(2);
            $table->string('password')->nullable();
            $table->boolean('password_confirmed')->default(false);
            $table->string('provider_id')->nullable();
            $table->string('provider_token')->nullable();
            $table->string('provider')->nullable();
            $table->unsignedBigInteger("img_user_id")->nullable()->default(1);
            $table->unsignedBigInteger("gender_id")->nullable();
            $table->date("date_of_birth")->nullable();
            // $table->integer("dob")->default(1)->max(31)->min(1);
            // $table->integer("mob")->default(1)->max(12)->min(1);
            // $table->integer("yob")->default(2000)->max(2021)->min(1900);
            // $table->string('country')->nullable();
            $table->unsignedBigInteger("system_id")->nullable()->default(1);
            $table->unsignedBigInteger("diploma_id")->nullable()->default(1);
            $table->unsignedBigInteger("noc_id")->nullable()->default(1);
            $table->integer("eligibility_score")->default(0)->max(100)->min(0);
            $table->integer("crs_score")->default(0)->max(1200)->min(0);
            $table->integer("arrima_score")->default(0)->max(100)->min(0);
            $table->unsignedBigInteger("step_id")->nullable()->default(1);
            $table->boolean("is_banned")->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('country_id')
            //     ->references('id')->on('countries');
            // ->cascadeOnDelete();

            $table->foreign('role_id')
                ->references('id')->on('roles');
            // ->cascadeOnDelete();

            $table->foreign('system_id')
                ->references('id')->on('systems');
            // ->cascadeOnDelete();

            $table->foreign('diploma_id')
                ->references('id')->on('diplomas');
            // ->cascadeOnDelete();

            $table->foreign('img_user_id')
                ->references('id')->on('img_users')
                /* ->cascadeOnDelete() */;

            $table->foreign('noc_id')
                ->references('id')->on('nocs');
            // ->cascadeOnDelete();

            $table->foreign('step_id')
                ->references('id')->on('steps');
            // ->cascadeOnDelete();

            $table->foreign('gender_id')
                ->references('id')->on('genders');
            // ->cascadeOnDelete();
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
