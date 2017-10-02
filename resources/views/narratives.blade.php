@extends('master')
@section('content')
    <div class="narratives-header">
        <h2>
            <div>Narratives::</div>
            <br>
            How might we provide comprehensive sexual and reproductive health services to girls and women affected by
            conflict or disaster?
        </h2>
    </div>
    <div class="mt3 container pl0">
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
        <div class="clearfix"></div>
        @foreach($articles as $post)
            <div class="panel mb4 col-md-4 p0 ml4 disply maxHeight483">
                <a href="{{'/narratives/'.$post->id.''}}">
                    <div class="listing-image">
                        <img src="/uploads/{{$post->thumbnail}}" class="image-replace" width="285">
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