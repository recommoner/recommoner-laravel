@extends('master')
@section('content')
    <div class="challenge-content container">
        <div class="form-group col-md-4 pull-right col-ms-12">

            <select class="form-control">
                <option>All</option>
                <option>Applauds</option>
                <option>Comments</option>
                <option>Newest</option>
                <option>Random</option>
                <option>Recently updated</option>
                <option>Views</option>
            </select>

        </div>
        <div class="form-group col-md-12"></div>
        @foreach($articles as $post)
            <div class="panel col-md-4 p0 ml2 disply maxHeight483">
                <a href="{{'/narratives/'.$post->id.''}}">
                    <div class="listing-image">
                        <img src="/uploads/{{$post->thumbnail}}"
                             class="image-replace"
                             width="285">
                    </div>
                    <div class="listing-details">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection