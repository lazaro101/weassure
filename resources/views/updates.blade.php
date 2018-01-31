@extends('layouts.web')

@section('content')
 
<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">News</h1><br>
    <center><img src="@if(isset($pic1)) {{$pic1->news_pic}}@endif" style="width: 655px"></center><br>
</div>

<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">New Products</h1><br>
    <center><img src="@if(isset($pic2)){{$pic2->prod_pic}}@endif" style="width: 655px"></center><br>
</div>

<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">Achiever of the month</h1><br>
    <center><img src="@if(isset($pic3)){{$pic3->emp_pic}}@endif" style="width: 655px"></center><br><br>
</div>

@endsection