<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    
    /**
     * Get the category that owns the Portfolio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->morphTo('category_id');
    }
}
