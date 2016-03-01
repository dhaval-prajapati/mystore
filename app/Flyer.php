<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model {
	protected $fillable = [
		'street','state','country','zip'
	];

	public function photo(){
		return $this->hasMany('App\photo');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
}
