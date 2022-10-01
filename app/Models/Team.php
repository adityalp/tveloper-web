<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    use HasUuids;
    
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
