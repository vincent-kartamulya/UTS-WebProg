@extends('layout.master')

@section('title', 'Home')

@section('content')
<div class="flex w-10/12 mx-auto mt-5">
    <div>
        <img src="{{$postHighlight->image}}" class="h-auto max-w-sm rounded-lg" alt="">
    </div>
    <div class="ml-3">
        <p class="w-[10vw] font-bold border-b-2 border-black">
            IT REALLY COUNTS
        </p>
        <h1 class="text-[50px] ">
            {{$postHighlight ->title}}
        </h1>
        <p>
            {{$postHighlight->description}}
        </p>
    </div>
</div>

<div class="w-10/12 mx-auto mt-8 ">
    <div class="w-[12vw] font-bold border-b-2 border-black mb-5 text-lg">
        Latest Book Reviews
    </div>
    <div class="flex justify-center gap-2">
        @foreach ($postLatest as $post)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/detail/{{$post->id}}">
                    <img class="rounded-t-lg" src="{{$post->image}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$post->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">{{$post->description}}</p>

                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="w-10/12 mx-auto mt-8">
    <div class="w-[12vw] text-lg font-bold border-b-2 border-black mb-5">
        Book Series Review
    </div>
    <div class="flex flex-wrap justify-between gap-8">
        @foreach ($posts as $post)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="/detail/{{$post->id}}">
                    <img class="rounded-t-lg" src="{{$post->image}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$post->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">{{$post->description}}</p>
                    <a href="/detail/{{$post->id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read Post
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
