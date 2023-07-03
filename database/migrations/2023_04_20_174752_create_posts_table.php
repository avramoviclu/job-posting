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
        Schema::create('posts', function (Blueprint $table) {
            $table->ulid('id');
            $table->foreignUlid('company_id');
            $table->foreignUlid('content_id');
            $table->string('title');
            $table->boolean('is_active')->default(true);
            $table->timestamp('published_at');

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_canonical_url')->nullable();

            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_url')->nullable();

            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_card')->nullable();

            $table->string('email');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
