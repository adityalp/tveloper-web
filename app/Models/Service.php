<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Service extends Model
{
    use HasFactory;
    
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['title', 'slug', 'icon', 'description', 'is_active'];
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
