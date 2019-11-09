@extends('admin.layouts.app')



@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<form method="post" action="/" enctype="multipart/form-data">
						<div class="col-md-3">
							<input class="form-control" type="text" name="search" placeholder="Search group name">
						</div>
						<div class="col-md-3">						
							<select name ="group_name" class="form-control">
								<option>select group name</option>
									@foreach($group_list as $key => $value)
										<option>{{$value->type_name}}</option>	
									@endforeach
							</select>					
						</div>
						<div class="col-md-3">						
				            <input type='text' class="form-control" id='datetimepicker1' />
				    						   
						</div>
					</form>
				
					<hr>

					<h4>Recent Post Sent to Buffer</h4>

					<table class="table table-bordered"> 
						<thead> 
							<tr> 
								<th>Group Name</th> 
								<th>Group Type</th>
							    <th>Account Name</th>
								<th>Post Text</th>
								<th>Time</th>
								
							</tr> 
						</thead> 
						<tbody> 
							@foreach($list_data as $key => $value)
								<tr>
									<td>{{$value->group_name}}</td>
									<td>{{$value->type}}</td>
									<td>{{$value->account_name}}</td>
									<td>{{$value->text}}</td>
									<td>{{$value->created_at}}</td>									
								</tr>							
							@endforeach
							
						 </tbody> 
					 </table>

					 
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

@endsection

