@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 form-group">
                <h1>Articles</h1>
            </div>
            <div class="col-md-2 mt4 form-group">
                <a href="articles/create" class="btn pull-right btn-primary">Add New</a>
            </div>

            <div class="col-md-12 panel form-group">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="20%">Title</th>
                        <th width="34%">Description</th>
                        <th width="15%">Created On</th>
                        <th width="10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>
                            <a href="{{'/articles/'.$post->id.'/edit'}}" class="btn btn-info">Edit</a>
                            <form style="display: inline-block;" action="{{'/articles/'.$post->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
