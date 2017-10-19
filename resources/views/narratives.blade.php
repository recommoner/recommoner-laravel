@extends('master')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
<style>
    .links {
        color: #ff6600 !important;
    }
</style>

<div class="narratives-header">
    <h2>
        <div style=" color: #e77223; font-family: 'Source Sans Pro', sans-serif;">NARRATIVES ::
        </div>
        <br>
        RECOMMONER is an open commoning platform. Join our community by sharing your stories, thoughts and concerns
        about tenancy.
        @if (Auth::guest())
        <a class="links"
           href="{{ url('register')}}">Sign up</a> or <a
                href="{{ url('login')}}" class="links">Login</a>.
        @endif
    </h2>
</div>
<div class="mt3 container pl0">
    <div class="form-group col-md-12"></div>
    <div class="clearfix"></div>
    <?php if (count($articles) == 0) { ?>
        <h3 style="text-align: center; color: #bf2511">Not any article uploaded yet</h3>
    <?php } ?>
    @foreach($articles as $post)
    <div class="panel mb4 col-md-4 p0 ml4 disply maxHeight483">
        <a href="{{url('/narratives/'.$post->id.'')}}">
            <div class="listing-image">
                <img src="{{ asset('uploads/'.$post->thumbnail.'')}}" class="image-replace">
            </div>
            <div class="listing-details">
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}</p>
            </div>
        </a>
    </div>
    @endforeach

    <div class="col-md-12 text-center mt4" style="margin-bottom: 30px">
        <?php echo $articles->render(); ?>
    </div>

</div>
@endsection