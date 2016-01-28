@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create New Member
			</div>

			<div class="panel-body">
				<a href="{{url('members')}}" class="btn btn-xs btn-default pull-right">back to list</a>
				<div class="clearfix"></div>
				
				@include('common.errors')
				
				<form action="{{url('member/store')}}" method="POST" class="form-horizontal">
					
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Full Name</label>
						<div class="col-sm-6">
							<input type="text" name="mm_full_name" id="mm_full_name" class="form-control" value="">
						</div>
					</div>		
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Nick Name</label>
						<div class="col-sm-6">
							<input type="text" name="mm_nick_name" id="mm_nick_name" class="form-control" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Nomor Hape</label>
						<div class="col-sm-4">
							<input type="text" name="mm_nohp" id="mm_nohp" class="form-control" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Nomor Telp</label>
						<div class="col-sm-4">
							<input type="text" name="mm_notelp" id="mm_notelp" class="form-control" value="">
						</div>
					</div>		
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Alamat</label>
						<div class="col-sm-6">
							<textarea name="mm_address" id="mm_address" class="form-control" ></textarea>
						</div>
					</div>		
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Hobby</label>
						<div class="col-sm-6">
							<textarea name="mm_hoby" id="mm_hoby" class="form-control" ></textarea>
						</div>
					</div>		
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-primary">save member</button>
						</div>
					</div>		
					
				</form>
				
			</div>	
		</div>	
	</div>	
</div>	
@endsection