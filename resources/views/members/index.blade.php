@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Member Lists
					
			</div>

			<div class="panel-body">
				<p class="text-right"><a href="{{url('member/create')}}" class="btn btn-xs btn-default">create new</a><p>
				
				@if(count($members)>0) 
					
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Nick Name</th>
								<th>No Hp</th>
								<th>No Telp</th>
								<th>Address</th>
								<th>Hobby</th>
								<th style="width:80px;"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($members as $mm)
							<tr>
								<td>{{$mm->mm_full_name}}</td>
								<td>{{$mm->mm_nick_name}}</td>
								<td>{{$mm->mm_nohp}}</td>
								<td>{{$mm->mm_notelp}}</td>
								<td>{{$mm->mm_address}}</td>
								<td>{{$mm->mm_hoby}}</td>
								<td class="text-center">
									<form method="POST" action="{{url('member/'.$mm->id)}}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<a href="{{url('member/'.$mm->id.'/edit')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
										<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
									</form>
									
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
					
				@endif
				
			</div>	
		</div>	
	</div>	
</div>
@endsection	