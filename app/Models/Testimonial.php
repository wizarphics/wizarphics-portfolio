<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property ?User $user
 * @property ?string $reviewer_name
 * @property string $content
 * @property bool $is_approved
 * @property float $rating
 * @property Image $image
 */
class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reviewer_name',
        'image_id',
        'content',
        'is_approved',
        'rating'
    ];

    /**
     * The person that gave the testimony.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => $this->reviewer_name
        ]);
    }

    /**
     * The image of the person that gave the testimony.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
