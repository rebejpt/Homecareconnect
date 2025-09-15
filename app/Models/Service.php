<?php

namespace App\Models;

use App\Models\Placement;
use App\Models\EmployeService;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'nom',
        'description',
        'tarif'
    ];

    public function placements()
    {
        $this->hasMany(Placement::class, 'service_id','');
    }
    public function employe_service()
    {
        $this->hasMany(EmployeService::class, 'service_id','');
    }
}
