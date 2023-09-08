<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $company
 * @property string $website
 * @property string $email
 * @property string $phone
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'website',
        'email',
        'phone'
    ];
}
