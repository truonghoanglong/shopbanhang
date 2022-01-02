@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/css/blog_details.css')}}">


<div class="container">
    @foreach($edit_blog as $key => $edit_vla)
    <div class="title">
        <h2>{{$edit_vla->blog_title}}</h2>
    </div>
    <div class="img">
        <img src="{{URL::to('public/uploads/blog/'.$edit_vla->blog_image)}}" alt="">
        
    </div>
    <div class="content">
        <p>{{$edit_vla->blog_content_desc}}</p>
    </div>
    @endforeach
</div>

@endsection