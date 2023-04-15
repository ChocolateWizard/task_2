<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductionInfo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'production';
    protected $primaryKey = 'id';

    protected $fillable = [
        'movie_id',
        'person_id',
        'production_role_id'
    ];
    
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class,'movie_id','id');
    }
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class,'person_id','id');
    }
    public function productionRoles(): BelongsTo
    {
        return $this->belongsTo(ProductionRole::class,'production_role_id','id');
    }
    public function actingRoles(): hasMany
    {
        return $this->hasMany(ActingRole::class, 'production_id', 'id');
    }

}
