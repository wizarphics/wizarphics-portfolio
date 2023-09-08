<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property ?Image $image
 * @property string $title
 * @property string $content
 */
class CaseSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'title',
        'content',
        'case_id'
    ];

    /**
     * Returns the section image if it exists
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function case(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }
}
