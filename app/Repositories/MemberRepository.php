<?php 
namespace App\Repositories;
use App\User;
use App\Member;

class MemberRepository
{
	
	public function forUser(User $user){
		
		return Member::where('user_id',$user->id)
						->orderBy('created_at', 'desc')
						->get();
		
	}
	
}
	