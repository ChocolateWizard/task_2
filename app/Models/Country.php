<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'countries';
    protected $primaryKey = 'id';

    //Shows which fields the seeder should fill
    protected $fillable = [
        'name',
        'official_state_name',
        'code'
    ];

    //Constructor
    // protected $attributes = [
    //     'name' => 'N/A',
    //     'official_state_name' => 'N/A',
    //     'code' => ''
    // ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'country_id', 'id');
    }
}
