@extends('master')
@section('content')
<style>
    .user-font {
        line-height: 1.9;
    }

    .titleSet {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .titleSet h2 {
        margin-bottom: 4px;
    }

    .titleSet span {
        margin-bottom: 4px;
        font-size: 12px;
        color: gray;
    }

    .hPadding32 {
        padding-bottom: 0 !important;
    }

    img {
        padding-top: 10px;
        padding-bottom: 18px;
        max-width: 100%;
    }

    .pa3 {
        padding-bottom: 0px !important;
    }
</style>
<div class="container panel mt4 mb5"
     style="padding-left: 50px !important; padding-right: 50px !important; max-width: 1000px">
    <div class="form-group titleSet">
        <h1>{{$data['item']->title}}</h1>
        <span>{{$data['item']->created_at}}</span>
    </div>
    <div class="form-group mb2">
        <img style="width: 100%;" src="{{ asset('uploads/actual-'. $data['item']->thumbnail.'')}}"
             class="image-replace">
    </div>
    <div class="form-group mb2">
        {!! $data['item']->contents !!}
    </div>
    <div id="comments" class="row col-md-12 form-group">
        <hr>
        <div class="form-group">
            <h3>Comments</h3>
            @if (Auth::guest())
            <p>Please <a href="{{url('login')}}">sign in</a> or <a href="{{url('register')}}">create an account</a> to
                post a comment</p>
            @endif

            @if (isset($_GET['comment_success']))
            <p style="color: green">Thanks. Your comment has been posted, It will be published after review</p>
            @endif
        </div>
        <div class="row">
            @foreach($data['comments'] as $post)
            <div class="col-md-12 form-group commentList">
                <h4>{{$post->name}}</h4>
                <span>{{$post->created_at->diffForHumans()}}</span>
                <p>
                    {{$post->comment}}
                </p>
                <hr>
            </div>
            @endforeach

        </div>

        <div class="clearfix"></div>
        <div class="row">

        </div>
        @if (!Auth::guest())
        <div class="row mt4">
            <div class="col-md-8">
                <form action="{{url('comments/')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-6 form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Comment</label>
                        <textarea name="comment" required class="form-control" style="height: 200px"></textarea>
                    </div>
                    <input type="text" name="post" hidden value="{{$data['item']->id}}">
                    <input type="text" name="status" hidden value="0">
                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn pull-right btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>

        </div>
        @endif
    </div>
</div>


@endsection