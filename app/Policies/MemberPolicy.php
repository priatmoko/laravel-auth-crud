<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Member;

class MemberPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
	
	public function destroy(User $user, Member $member)
	{
		
		return $user->id === $member->user_id;
		
	}
}
