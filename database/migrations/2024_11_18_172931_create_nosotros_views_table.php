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
        Schema::create('nosotros_views', function (Blueprint $table) {
            $table->id();
            
            $table->string('subtitle1section')->nullable();
            $table->string('title1section')->nullable();
            $table->string('title1section2')->nullable();
            $table->text('description1section')->nullable();

            $table->string('title2section')->nullable();
            $table->string('subtitle2section')->nullable();
            $table->string('url_image2section')->nullable();

            $table->string('title3section')->nullable();
            $table->string('subtitle3section')->nullable();
            $table->string('url_image3section')->nullable();
          
            $table->string('subtitle4section')->nullable();
            $table->string('title4section')->nullable();
            $table->string('title4section2')->nullable();
            $table->text('description4section')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nosotros_views');
    }
};
