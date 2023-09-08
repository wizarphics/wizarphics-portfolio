<?php

use App\Models\CaseStudy;
use App\Models\Image;
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
        Schema::create('case_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Image::class)->nullable();
            $table->string('title');
            $table->text('content');
            $table->foreignIdFor(CaseStudy::class, 'case_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_sections');
    }
};
