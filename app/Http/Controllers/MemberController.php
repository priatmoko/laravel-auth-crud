<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use App\Repositories\MemberRepository;

class MemberController extends Controller
{
	protected $member;
	
    public function __construct(MemberRepository $member)
	{
		
		$this->middleware('auth');
		
		$this->member=$member;
		
	}
	
	public function index(){
		
		$members=Member::OrderBy('created_at', 'desc')->get();
		
		return view('members.index', compact('members'));
		
	}
	
	public function create(){
		
		return view('members.create');
		
	}
	
	public function store(Request $request){
		
		$this->validate($request,[
			'mm_full_name'=>'required|max:225',
			'mm_nick_name'=>'required|max:225',
			'mm_nohp'=>'required|max:15',
			'mm_notelp'=>'required|max:15',
			'mm_address'=>'required',
			'mm_hoby'=>'required']);
		
		$member= new Member;
		
		$member->mm_full_name=$request->mm_full_name;
		$member->mm_nick_name=$request->mm_nick_name;
		$member->mm_nohp=$request->mm_nohp;
		$member->mm_notelp=$request->mm_notelp;
		$member->mm_address=$request->mm_address;
		$member->mm_hoby=$request->mm_hoby;
		$member->save();
		
		return redirect('members');
		
	}
	
	public function edit($id){
		
		$members=Member::find($id);
		
		return view('members.edit', compact('members'));
		
	}
	
	public function update($id, Request $request){
		
		$this->validate($request,[
			'mm_full_name'=>'required|max:225',
			'mm_nick_name'=>'required|max:225',
			'mm_nohp'=>'required|max:15',
			'mm_notelp'=>'required|max:15',
			'mm_address'=>'required',
			'mm_hoby'=>'required']);
		
		$person=[
			'mm_full_name'=>$request->mm_full_name,
			'mm_nick_name'=>$request->mm_nick_name,
			'mm_nohp'=>$request->mm_nohp,
			'mm_notelp'=>$request->mm_notelp,
			'mm_address'=>$request->mm_address,
			'mm_hoby'=>$request->mm_hoby];
		
		Member::where('id', $id)->update($person);
		
		return redirect('members');
		
	}
	
	public function destroy($id){
		
		Member::where('id', $id)->delete();
		
		return redirect('members');
		
	}
	
}
