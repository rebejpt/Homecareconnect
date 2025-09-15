<?php

namespace App\Models;

use App\Models\Employe;
use App\Models\Service;
use App\Models\Paiement;
use App\Models\Employeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Placement extends Model
{
    //
    
    use HasFactory;

    protected $table = 'placements';

    protected $fillable = [
        'employeur_id',
        'employe_id',
        'service_id',
        'type_contrat',
        'date_debut',
        'date_fin',
        'statut'
    ];

    public function employeur()
    {
        return $this->belongsTo(Employeur::class, 'employeur_id');
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'placement_id');
    }
}
