<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorRole extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'actors_roles';
    protected $primaryKey = 'production_id';

    protected $fillable = [
        'production_id',
        'role'
    ];
}
