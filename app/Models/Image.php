<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $content
 * @property string $desc
 * @property string $alt
 * @property int|bool $is_html
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'desc',
        'alt',
        'is_html',
    ];
}
