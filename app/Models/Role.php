<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $slug
 * @property string $title
 * @property string $desc
 * @property Image $icon
 * @property Image $image
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'desc',
        'icon_id',
        'image_id'
    ];

    /**
     * The icon for the role.
     */
    public function icon(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'icon_id');
    }

    /**
     * The image for the role.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function caseStudies(): BelongsToMany
    {
        return $this->belongsToMany(CaseStudies::class, 'case_study_role', 'role_id', 'case_study_id');
    }
}
