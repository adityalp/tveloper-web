<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['title', 'slug', 'description', 'path', 'path_zoom', 'attr', 'is_active', 'category_id'];
    /**
     * Get the category that owns the Portfolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->morphTo('category_id');
    }

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
