<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'social_medias';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['icon', 'title', 'link', 'is_active'];
    /**
     * Set the Id.
     *
     * @param  string  $value
     * @return void
     */
    public function setIdAttribute($value) {
        $this->attributes['id'] = (String) Uuid::uuid4();
    }
}
