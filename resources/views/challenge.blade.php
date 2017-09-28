@extends('master')
@section('content')
    <div class="challenge-content">
        @foreach($articles as $post)
            <div class="panel w-30 ml2 disply">
                <a href="/challenge">
                    <div class="listing-image">
                        <img src="/uploads/{{$post->thumbnail}}"
                             class="image-replace"
                             width="285">
                    </div>
                </a>
                <div class="listing-details">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->description}}</p>
                </div>
            </div>
        @endforeach

    </div>
@endsection