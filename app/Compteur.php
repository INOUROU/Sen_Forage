<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 18:27:38 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Compteur
 * 
 * @property int $id
 * @property string $uuid
 * @property string $numero_serie
 * @property int $administrateurs_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Administrateur $administrateur
 * @property \Illuminate\Database\Eloquent\Collection $abonnements
 * @property \Illuminate\Database\Eloquent\Collection $consommations
 *
 * @package App
 */
class Compteur extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;use \App\Helpers\UuidForKey;

	protected $casts = [
		'administrateurs_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'numero_serie',
		'administrateurs_id'
	];

	public function administrateur()
	{
		return $this->belongsTo(\App\Administrateur::class, 'administrateurs_id');
	}

	public function abonnement()
	{
		return $this->hasOne(\App\Abonnement::class, 'compteurs_id');
	}

	public function consommations()
	{
		return $this->hasMany(\App\Consommation::class, 'compteurs_id');
	}
}
