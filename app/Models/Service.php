<?php

namespace App\Models;

use App\Models\Placement;
use App\Models\EmployeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'nom',
        'description',
        'tarif'
    ];

    public function placements():HasMany
    {
        $this->hasMany(Placement::class, 'service_id','');
    }
    public function employes():HasMany
    {
        $this->hasMany(Employe::class, 'service_id');
    }
}
