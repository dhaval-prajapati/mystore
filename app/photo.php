<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model {

	//
	protected $fillable = ['image'];
	public function flyer(){
		return $this->belongsTo('App\Flyer');
	}

}
