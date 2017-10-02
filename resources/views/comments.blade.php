@extends('master')
@section('content')
    <div class="container">
        <div class="row mt4">
            <div class="col-md-9 form-group">
                <h1>Comments</h1>
            </div>
            <div class="col-md-3 mt4 form-group">
                <div class="pull-right">
                    <a href="/articles" class="btn btn-default btn-lg">Articles</a>
                </div>
            </div>

            <div class="col-md-12 mt4 table-responsive panel form-group">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="20%">Name</th>
                        <th width="30%">Email</th>
                        <th width="15%">Created On</th>
                        <th width="15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $post)
                        <tr>
                            <td>{{$post->name}}</td>
                            <td>{{$post->email}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a href="{{'/comments/'.$post->id.'/'.$post->status.''}}" class="btn btn-default">{{$post->status ==1 ? 'Disapproved':'Approve'}}</a>
                                <form style="display: inline-block;" action="{{'/comments/'.$post->id}}" method="post">
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
                <?php echo $comments->render(); ?>
            </div>
        </div>
    </div>
@endsection