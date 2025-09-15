<?php

namespace App\Models;

use App\Models\User;
use App\Models\Placement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employeur extends Model
{
    //
    use HasFactory;

    protected $table = 'employeurs';

    protected $fillable = [
        'user_id',
        'type',
        'nom_entreprise',
        'telephone',
        'adresse'
    ];

    //Cette fonction définit une relation entre le modèle courant (ex: Employeur) et le modèle User
    public function user()
    {
        // belongsTo signifie : "ce modèle appartient à un autre modèle"
        // Ici, chaque employeur est lié à UN utilisateur (via la colonne user_id dans la table employeurs)
        return $this->belongsTo(User::class, 'user_id');
        // User::class => c'est le modèle User
        
    }

    // Cette fonction définit une relation entre le modèle courant (ex: Employeur) et Placement
    public function placements()
    {
        // hasMany signifie : "ce modèle possède plusieurs autres modèles"
        // Ici, un employeur peut avoir plusieurs placements (via la colonne employeur_id dans la table placements)
        return $this->hasMany(Placement::class, 'employeur_id');
        // Placement::class => c'est le modèle Placement
        
    }

}
