@extends('master')
@section('content')
    <div class="container">
        <div class="row mt4">
            <div class="col-md-8 form-group">
                <h1>Articles</h1>
            </div>
            <div class="col-md-4 mt4 form-group pr0">
                <div class="pull-right">
                    <a href="/comments" class="btn btn-default btn-lg">Comments</a>
                    <a href="articles/create" class="btn btn-primary btn-lg">Add New Articles</a>
                </div>
            </div>

            <div class="col-md-12 mt4 table-responsive panel form-group">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="22%">Title</th>
                        <th width="40%">Description</th>
                        <th width="20%">Created On</th>
                        <th width="20%">Action</th>
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
            <div class="col-md-12 text-center mt4">
                <?php echo $articles->render(); ?>
            </div>
        </div>
    </div>
@endsection
