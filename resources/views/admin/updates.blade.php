@extends('layouts.admin')

@section('content')

<div class="main">
<br><br>
<center><h1 style="color: maroon">News, New Products, Achiever of the Month</h1></center><br><br>

<center> 
<div class="main">
<br>
<h1 class="text-center">News<big>
</h1><button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">Update</button></big><br>
    <img src="@if(isset($pic1)){{$pic1->news_pic}}@endif" class="img-thumbnail" style="height: 500px"><br>    
</div>

<div class="main">
<br>
<h1 class="text-center">New Products</h1><big>
<button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">
Update</button></big><br>
    <img src="@if(isset($pic2)){{$pic2->prod_pic}}@endif" class="img-thumbnail" style="height: 500px"><br>
</div>

<div class="main">
<br>
<h1 class="text-center">Achiever of the month</h1><big>
<button type="button" data-toggle="modal" data-target="#myModal3" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">
Update</button></big><br>
    <img src="@if(isset($pic3)){{$pic3->emp_pic}}@endif" class="img-thumbnail" style="height: 500px">
</div>
</center>
</div><br><br>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="/addPicnews" enctype="multipart/form-data">
    	{{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>News</label><div class="form-group"><input type="file" value="" name="newspic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addnews" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="/addPicprod" enctype="multipart/form-data">
    	{{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>New Products</label><div class="form-group"><input type="file" value="" name="prodpic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addprod" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="/addPicachi" enctype="multipart/form-data">
    	{{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>Achiever of the Month</label><div class="form-group"><input type="file" value="" name="emppic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addemp" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

@endsection