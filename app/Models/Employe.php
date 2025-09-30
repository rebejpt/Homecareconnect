<?php

namespace App\Models;


use App\Models\User;
use App\Models\Service;
use App\Models\Placement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    //
    use HasFactory;

    protected $table = 'employes';

    protected $fillable = [
        'user_id',
        'service_id',
        'telephone',
        'adresse',
        'date_naissance',
        'profil',
        'salaire',
        'statut'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function placements():HasMany
    {
        return $this->hasMany(Placement::class, 'employe_id');
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class,  'service_id');
    }
}
