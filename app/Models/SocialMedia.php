<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'social_medias';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
