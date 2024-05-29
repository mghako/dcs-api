<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('short_description');
            $table->longText('content');
            $table->string('status');
            $table->boolean('is_feature');
            $table->boolean('is_popular');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_posts');
    }
};
