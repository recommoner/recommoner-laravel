@extends('master')
@section('content')
<div class="container">
    <?php if (isset($_GET['added']) || isset($_GET['updated'])) { ?>
        <div class="message" style="margin-top: 25px;
    padding: 17px;
    color: #fff;
    background-color: #f67635;">
            <?php
            if (isset($_GET['added'])) {
                echo 'Article Added Successfully. Will be published after review';
            }

            if (isset($_GET['updated'])) {
                echo 'Article Updated Successfully';
            }
            ?>
        </div>
    <?php } ?>

    <div class="row mt4">
        <div class="col-md-8 form-group">
            <h1>Articles</h1>
        </div>
        <div class="col-md-4 mt4 form-group pr0">
            <div class="pull-right">
                <?php
                if ($data['isAdmin']) {
                    ?>
                    <a href="{{url('comments') }}" class="btn btn-default btn-lg">Comments</a>
                <?php } ?>
                <a href="{{url('articles/create')}}" class="btn btn-primary btn-lg">Add New Articles</a>
            </div>
        </div>


        <div class="col-md-12 mt4 table-responsive panel form-group">
            <table class="table">
                <thead>
                <tr>
                    <th width="22%">Title</th>
                    <th width="25%">Description</th>
                    <th width="20%">Created On</th>
                    <th width="10%">Status</th>
                    <th width="30%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['articles'] as $post)
                <tr>
                    <td><a target="_blank" href="{{url('narratives/'. $post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->status ? 'Published' : 'Pending'}}</td>
                    <td>
                        <?php if ($data['isAdmin']) { ?>
                            <a href="{{url('articles/'.$post->id.'/'.$post->status.'')}}" class="btn btn-default">
                                {{$post->status ==1 ? 'Disapprove':'Approve'}}
                            </a>
                        <?php } ?>
                        <a href="{{url('/articles/'.$post->id.'/edit')}}" class="btn btn-info">Edit</a>
                        <form style="display: inline-block;" action="{{url('/articles/'.$post->id)}}"
                              method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <?php if (count($data['articles']) === 0) { ?>
                    <tr>
                        <td colspan="5">
                            <div class="text-center mt4 text-danger">No Record Found</div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-12 text-center mt4">
            <?php echo $data['articles']->render(); ?>
        </div>
    </div>
</div>
@endsection
