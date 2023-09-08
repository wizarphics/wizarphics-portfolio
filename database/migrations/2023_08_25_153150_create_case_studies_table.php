<?php

use App\Models\Client;
use App\Models\Image;
use App\Models\Template;
use App\Models\Testimonial;
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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Image::class);
            $table->string('title');
            $table->string('slug');
            $table->text('short_desc');
            $table->boolean('is_active');
            $table->string('link')->nullable();
            $table->foreignIdFor(Template::class);
            $table->foreignIdFor(Testimonial::class)->nullable();
            $table->foreignIdFor(Client::class);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
