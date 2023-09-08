<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $slug
 * @property string $titles
 * @property string $desc
 * @property string $content
 * @property User $created_by
 * @property User $updated_by
 * @property bool $is_active
 * @property array $extras
 */
class Template extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'desc',
        'content',
        'created_by',
        'updated_by',
        'is_active',
        'extras',
    ];

    protected $casts = [
        'extras' => 'array'
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
