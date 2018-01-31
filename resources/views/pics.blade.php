@extends('layouts.web')

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

        <!-- <p class="page-description text-center">Grid Layout With Zoom Effect</p> -->
        
        <div class="tz-gallery">

            <div class="row">
                @foreach($pics as $pic)
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="/{{$pic->picture}}">
                        <img src="/{{$pic->picture}}" alt="Park">
                    </a>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection