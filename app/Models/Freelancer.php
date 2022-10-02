<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Freelancer extends Model
{
    use HasFactory;

    protected $table = 'freelancers';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['name', 'email', 'skill', 'phone', 'is_active'];
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
