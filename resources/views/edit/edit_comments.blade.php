@extends('master')
@section('editId',$item->id)
@section('editName',$item->name)
@section('editEmail',$item->email)
@section('editComment',$item->comment)
@section('content')
    <form action="/comments/@yield('editId')" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <fieldset>
            <div class="container mt4 mb30">
                <div class="row mt4">
                    <div class="col-md-8">
                        <div class="col-md-6 form-group">
                            <label>Name</label>
                            <input type="text" readonly required class="form-control" value="@yield('editName')" name="name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="text" readonly required class="form-control" value="@yield('editEmail')" name="email">
                        </div>

                        <div class="col-md-12 form-group">
                            <label>Comment</label>
                            <textarea required  maxlength="200"  name="comment" class="form-control"
                                      style="height: 150px">@yield('editComment')</textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <div>Approve</div>
                            <br>
                            <label><input type="radio" value="1" name="status"> Yes</label>
                            &nbsp;
                            <label><input type="radio" value="0" name="status"> No</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a href="/comments" class="btn btn-default btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection