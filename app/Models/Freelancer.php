<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'freelancers';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
