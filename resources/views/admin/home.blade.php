@extends('layouts.admin')

@section('content')

<div class="main">
<br>
<center><h1>List of Employee</h1></center><br><center><big>
<button type="button" rel="tooltip" title="View Profile" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">Add Employee</button></big></center><br><br>

<div class="main">
    <div class="table-responsive">
        <center>
            <table class="table" style="width: 80%">
                <thead>
                    <tr>
                        <th style="color: red"><strong>Name</strong></th>
                        <th style="color: red"><strong>Position</strong></th>
                        <th class="text-right" style="color: red"><strong>Actions</strong></th>
                    </tr>
                </thead>
				<tbody>
					@foreach($emp as $emp)
					<tr>
						<td>{{$emp->name}}</td>
						<td>{{$emp->position}}</td>
						<td class="td-actions text-right">
							<button type="button" class="btn btn-danger btn-simple btn-xs" onclick="location.href='/deleteemp/{{$emp->emp_id}}'"><i class="fa fa-times"></i></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</center>
	</div>
   
</div>

<div class="separator"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form action="/saveemp" method="post">
      {{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
      </div>
      <div class="modal-body">

        <label>Name</label><div class="form-group"><input type="text" name="name" class="form-control" /></div>
        <label>Position</label><div class="form-group"><input type="text" name="position" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </div>
	</form>
  </div>
</div>
@endsection