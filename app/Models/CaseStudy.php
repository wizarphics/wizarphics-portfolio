<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property string $title
 * @property string $short_desc
 * @property string $link
 * @property string $slug
 * @property Client $client
 * @property Role[] $roles
 * @property Template $template
 * @property Testimonial $testimonial
 * @property CaseSection[] $sections
 */
class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'title',
        'slug',
        'short_desc',
        'is_active',
        'link',
        'template_id',
        'testimonial_id',
        'client_id',
    ];

    /**
     * Returns the case study associated image
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    /**
     * The client that owns the project.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * The role involved in services rendered in the project
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'case_study_roles', 'case_study_id','role_id');
    }

    /**
     * The template that the project case study should be rendered in.
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }

    /**
     * The featured testimony for the project case study.
     */
    public function testimonial(): BelongsTo
    {
        return $this->belongsTo(Testimonial::class);
    }

    /**
     * The various aspects of the project case study.
     */
    public function sections(): hasMany
    {
        return $this->hasMany(CaseSection::class);
    }
}
