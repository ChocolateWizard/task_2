<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActingRole extends Model
{

    public $timestamps = false;
    protected $table = 'acting_roles';
    protected $primaryKey = 'production_id';

    protected $fillable = [
        'production_id',
        'role'
    ];
}
