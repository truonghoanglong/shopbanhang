@extends('layout')
@section('content')
<link rel="stylesheet" href="./restet_blog.css">
<link rel="stylesheet" href="./blog.css">
<link rel="stylesheet" href="./grid_blog.css">
<link rel="stylesheet" href="{{asset('public/frontend/css/restet_blog.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/blog.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/grid_blog.css')}}">

<div class="grid wide">
    @foreach($all_blog as $key => $blog_pro)
    <div class="row">
        <div class="col l-4 m-4 c-2">
            <div class="img">
                <img src="public/uploads/blog/{{$blog_pro -> blog_image}}" alt="">
            </div>
        </div>
            
        <div class="col l-8 m-8 c-10 ">
            <div class="content">
                <h2>{{$blog_pro -> blog_title}}</h2>
                {{$blog_pro -> blog_content}} <br>
                <button><a href="{{URL::to('/blog-details/'.$blog_pro->blog_id)}}" class="active edit" >Xem Chi Tiết...</a></button>
            </div>
        </div>
            
    </div>
    @endforeach
</div>
@endsection