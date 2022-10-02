<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['id', 'name', 'email', 'subject', 'message', 'is_active', 'attr'];
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
