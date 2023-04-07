<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductionRole extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'production_roles';
    protected $primaryKey = 'id';

    //Shows which fields the seeder should fill
    protected $fillable = [
        'name'
    ];


    public function productionRoles(): BelongsToMany
    {
        return $this->belongsToMany(ProductionRole::class, 'people_production_roles', 'production_role_id', 'person_id');
    }
}
