<?php

namespace App\Models;


use App\Models\User;
use App\Models\Service;
use App\Models\Placement;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
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

<<<<<<< HEAD
    public function user():BelongsTo
=======
    public function user()
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    {
        return $this->belongsTo(User::class, 'user_id');
    }

<<<<<<< HEAD
    public function placements():HasMany
=======
    public function placements()
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    {
        return $this->hasMany(Placement::class, 'employe_id');
    }

<<<<<<< HEAD
    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class,  'service_id');
=======
    public function services()
    {
        return $this->belongsToMany(Service::class, 'employe_service', 'employe_id', 'service_id');
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
    }
}
