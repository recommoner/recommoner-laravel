@extends('master')
@section('content')
    <style>
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
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 100%;
        }
    </style>
    <div class="container panel">
        <div class="form-group titleSet">
            <h2>{{$data['item']->title}}</h2>
            <span>{{$data['item']->created_at}}</span>
        </div>
        <div class="form-group mb2">
            {!! $data['item']->contents !!}
        </div>
        <div id="comments" class="col-md-12 form-group">
            <hr>
            <div class="form-group">
                <h3>Comments</h3>
            </div>
            <hr>
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
            <div class="row mt4">
                <div class="col-md-8">
                    <form action="/comments" method="POST">
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
        </div>
    </div>


@endsection