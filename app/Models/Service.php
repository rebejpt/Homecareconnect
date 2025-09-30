<?php

namespace App\Models;

use App\Models\Placement;
use App\Models\EmployeService;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'nom',
        'description',
        'tarif'
    ];

<<<<<<< HEAD
    public function placements():HasMany
    {
        $this->hasMany(Placement::class, 'service_id','');
    }
    public function employes():HasMany
    {
        $this->hasMany(Employe::class, 'service_id');
=======
    public function placements()
    {
        $this->hasMany(Placement::class, 'service_id','');
    }
    public function employe_service()
    {
        $this->hasMany(EmployeService::class, 'service_id','');
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    }
}
