<?php 

namespace App\Models;

class Record extends BaseModel {

	protected $table = 'records';
	protected $fillable = ['dp_name','id_user'];

	public $relations =['user'];
	
    public function user()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }
}