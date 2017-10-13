@extends('master')
@section('content')
<style>
    .links {
        color: #ff6600 !important;
    }
</style>
<div class="narratives-header">
    <h2>
        <div style=" color: #e77223;
    font-family: -webkit-body;">NARRATIVES ::
        </div>
        <br>
        RECOMMONER is an open commoning platform. Join our community by sharing your stories, thoughts and concerns
        about tenancy. <a class="links"
                          href="{{url('register')}}">Sign up</a> or <a
                href="{{url('login')}}" class="links">Login</a>.
    </h2>
</div>
<div class="mt3 container pl0">
    <div class="form-group col-md-4 pull-right col-ms-12">

        <!--        <select class="form-control">-->
        <!--            <option>All</option>-->
        <!--            <option>Applauds</option>-->
        <!--            <option>Comments</option>-->
        <!--            <option>Newest</option>-->
        <!--            <option>Random</option>-->
        <!--            <option>Recently updated</option>-->
        <!--            <option>Views</option>-->
        <!--        </select>-->

    </div>
    <div class="form-group col-md-12"></div>
    <div class="clearfix"></div>
    @foreach($articles as $post)
    <div class="panel mb4 col-md-4 p0 ml4 disply maxHeight483">
        <a href="{{url('/narratives/'.$post->id.'')}}">
            <div class="listing-image">
                <img src="{{ asset('uploads/'.$post->thumbnail.'')}}" class="image-replace" width="285">
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