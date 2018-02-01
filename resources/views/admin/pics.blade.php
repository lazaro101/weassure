@extends('layouts.admin')

@section('style')
  <link href="/GSD/gsd/bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/gallery-grid.css">
@endsection

@section('content')
<div class="main">
    <div class="container gallery-container">

        <h1>{{$alb->gallery_name}}</h1>

        <!-- <p class="page-description text-center">Grid Layout With Zoom Effect</p>     -->
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Add Photo</button>
            </div>
        </div>

        <div class="tz-gallery">

            <div class="row">
                @foreach($pics as $pic)
                <div class="col-sm-6 col-md-4">
                    <button class="btn btn-danger remove" style="position: absolute;z-index: 100;"><i class="fa fa-trash-o"></i></button>
                    <a class="lightbox" href="/{{$pic->picture}}">
                        <img src="/{{$pic->picture}}" alt="Park">
                    </a>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/addPhoto" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$alb->gallery_id}}">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add Photo/s</h4>
      </div>
      <div class="modal-body">

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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
    $(document).ready(function(){
        $('.remove').click(function(){ 
            var pic = $(this).closest('div').find('img').attr('src').replace(/\D/g,''); 
            $.ajax({
              url: '/delPhoto',
              type: 'post',
              dataType: 'json',
              data: { pic : pic,
                      _token: "{{ Session::token() }}", 
              },
              success:function(response){
                // alert(response);
              }
            });
            $(this).closest('div').remove();
        });
    });
</script>
@endsection