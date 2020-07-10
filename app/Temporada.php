<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Episodio;
class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;
    
    public function episodios()
    {
        return $this -> hasMany(Episodio::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
