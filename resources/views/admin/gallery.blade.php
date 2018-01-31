@extends('layouts.admin')

@section('content')

<div class="main">
	<br><br><center><h1 style="color: maroon">Gallery</h1></center><br><br><center> 

	<div class="container">
		<div class="row">
			<button type="button" rel="tooltip" data-toggle="modal" data-target="#myModal" class="btn btn-fill btn-lg btn-danger">Add Album</button><br><br>
		</div>
		<div class="row">
			@foreach($var as $var)
			<a href="/AdminGallery/{{$var->gallery_id}}" class="col-md-6">
			  	<div class="w3-card-4" style="width:50%">
				    <img src="{{$var->thumbnail}}" alt="Norway" style="width:100%" class="img-thumbnail">
				   	<h5>{{$var->gallery_name}}<br><small>Updated {{date_create($var->date)->format('F d, Y') }}</small> </h5>
  				</div>
			</a>
			@endforeach
		</div>
		
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form action="/addGallery" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
      </div>
      <div class="modal-body">

        <label>Album Name</label><div class="form-group"><input type="text" name="name" class="form-control" /></div>
        <label>Thumbnail</label><div class="form-group"><input type="file" name="thumbnail" class="form-control" /></div>
        <label>Photo/s</label><div class="form-group"><input type="file" name="photo[]" class="form-control" multiple /></div>

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
