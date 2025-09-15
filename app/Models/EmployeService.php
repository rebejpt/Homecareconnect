<?php

namespace App\Models;

use App\Models\Employe;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeService extends Model
{
    //
    use HasFactory;

    protected $table = 'employe_service';

    protected $fillable = [
        'employe_id',
        'service_id'
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
