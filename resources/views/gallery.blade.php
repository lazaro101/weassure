@extends('layouts.web')

@section('content')

<div class="main">
	<br><br><center><h1 style="color: maroon">Gallery</h1></center><br><br><center> 

	<div class="container"> 
		<div class="row">
			@foreach($var as $var)
			<div  class="col-md-6">
		  	<div class="w3-card-4" style="width:50%">
				<a href="/Gallery/{{$var->gallery_id}}">
				    <img src="{{$var->thumbnail}}" alt="Norway" style="width:100%" class="img-thumbnail">
				   	<h5>{{$var->gallery_name}}<br><small>Updated {{date_create($var->date)->format('F d, Y') }}</small> </h5>
				</a>	
			</div>
		</div>
			@endforeach
		</div>
		
	</div>
</div>
@endsection