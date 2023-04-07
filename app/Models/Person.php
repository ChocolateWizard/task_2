<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Person extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'people';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'profile_photo_url',
        'is_star'
    ];
    
    public function productionRoles(): BelongsToMany
    {
        return $this->belongsToMany(ProductionRole::class, 'people_production_roles', 'person_id', 'production_role_id');
    }
}
