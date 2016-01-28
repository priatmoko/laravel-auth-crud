<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillabel=['mm_fullname', 'mm_nick_name', 'mm_nohp', 'mm_notelp', 'mm_address', 'mm_hoby'];
	
	public function user(){
		
		return $this->belongsTo(User::class);
		
	}
}
