<?php

namespace App\Models;

use App\Models\Placement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    //
    
    use HasFactory;

    protected $table = 'paiements';

    protected $fillable = [
        'placement_id',
        'montant',
        'date_paiement',
        'mode_paiement',
        'type_paiement',
        'ref_transaction',
        'statut'
    ];

    public function placement()
    {
        return $this->belongsTo(Placement::class, 'placement_id');
    }
}
