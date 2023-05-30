@extends('layout.master')

@section('title', 'Home')

@section('content')
<div class="w-10/12 justify-center mx-auto mt-2">
    <p class="w-[10vw] font-bold border-b-2 border-black">IT REALLY COUNTS</p>
    <h1 class="mt-3 text-3xl mr-10">{{$post->title}}</h1>
    <p>{{$post->description}}</p>
    <div class="flex w-full">
        <p class="h-full my-auto font-bold">By {{$post->author}} |  </p>
        <p class="h-full my-auto ml-2">{{ date('d F, Y', strtotime($post->date)) }}</p>
        <div class="bg-emerald-200 rounded p-1 h-full ml-5">{{$category}}</div>
    </div>
    <div class="mt-8">
        <img class="w-full h-52"src={{$post->image}} alt="">
    </div>
    <div class="flex gap-2">
        <a href="https://www.linkedin.com/in/anderies-notanto" class="p-2 fa fa-linkedin"></a>
        <a href="https://twitter.com/" class="p-2 fa fa-twitter"></a>
        <a href="https://facebook.com/" class="p-2 fa fa-facebook"></a>
        <a href="https://instagram.com/" class="p-2 fa fa-instagram"></a>
    </div>
    <p class="mt-8 mb-8">{{$post->body}}</p>
    <p class="w-[10vw] font-bold border-b-2 border-black">Video Section</p>

    <video class="w-full" controls>
        <source src="{{$post->video}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</div>

@endsection
