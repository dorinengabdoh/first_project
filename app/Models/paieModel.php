<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paieModel extends Model
{
    use HasFactory;
    protected $table = 'paie';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'choix', 'Email','password', 'mode_paie', 'valeur_prod', 'coordonnee', 'MDP', 'valeur_transfert',
	];
}
