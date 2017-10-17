@extends('master')
@section('content')
<form action="{{url('articles/')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @section('editMethod')
    @show
    <fieldset>
        <form id="articleForm" class="container mt4 mb5 panel pb4">
            <div class="row mt4">
                <div class="col-md-8">
                    <div class="col-md-12 form-group">
                        <label>Title</label>
                        <input placeholder="Maximum 50 Characters are Allowed" type="text" maxlength="50" required
                               class="form-control" value="@yield('editTitle'){{ old('title') }}"
                               name="title">
                        @if ($errors->has('title'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label>Describe your story in 2-3 lines</label>
                        <textarea placeholder="Maximum 200 Characters are Allowed" name="description" maxlength="200"
                                  required class="form-control"
                                  style="height: 150px">@yield('editDescription'){{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label style="display: block">Please tell us your full Story</label>
                        <textarea id="editor" name="contents" class="form-control"
                                  style="height: 150px">@yield('editContents'){{ old('contents') }}</textarea>
                    </div>
                    @if ($errors->has('contents'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('contents') }}</strong>
                                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 form-group">
                        <label>Thumbnail</label>
                        <input type="file" required class="form-control" value="@yield('editThumbnail')"
                               name="thumbnail">
                        @if ($errors->has('thumbnail'))
                        <span class="help-block">
                            <strong>{{ $errors->first('thumbnail') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <input type="text" name="status" hidden value="0">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a href="{{url('articles')}}" class="btn btn-default btn-lg">Cancel</a>
                        <button type="submit" id="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </fieldset>
</form>
<script src="{{ url('js/tinymce/tinymce.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#articleForm').on('submit', function (e) {
            $('#submit').attr('disabled', 'disabled').text('Please Wait..');
        });
    });

    tinymce.init({
        selector: "#editor",
        skin: 'lightgray',
        th: 'modern',
        default_link_target: "_blank",
        remove_script_host: false,
        relative_urls: false,
        oninit: function () {
            var ed = tinyMCE.get('elm1');
            ed.pasteAsPlainText = true;
            if (tinymce.isOpera || /Firefox\/2/.test(navigator.userAgent)) {
                ed.onKeyDown.add(function (ed, e) {
                    if (((tinymce.isMac ? e.metaKey : e.ctrlKey) && e.keyCode == 86) || (e.shiftKey && e.keyCode == 45)) {
                        ed.pasteAsPlainText = true;
                    }

                });
            } else {
                ed.onPaste.addToTop(function (ed, e) {
                    ed.pasteAsPlainText = true;
                });
            }
        },
        plugins: [
            "wordcount lists link image paste",
            "searchreplace visualblocks code fullscreen",
            "media textcolor table"
        ],

        toolbar: "forecolor | backcolor | undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        autosave_ask_before_unload: false,
        max_height: 500,
        min_height: 160,
        height: 200
    });
</script>
@endsection