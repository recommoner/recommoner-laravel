@extends('master')
@section('content')
    <form action="/articles/@yield('editId')" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @section('editMethod')
        @show
        <fieldset>
            <div class="container mt4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-12 form-group">
                            <label>Title</label>
                            <input type="text" required class="form-control" value="@yield('editTitle')" name="title">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Description</label>
                            <textarea name="description" required class="form-control"
                                      style="height: 150px">@yield('editDescription')</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Contents</label>
                            <textarea id="editor" name="contents" class="form-control"
                                      style="height: 150px">@yield('editContents')</textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12 form-group">
                            <label>Thumbnail</label>
                            <input type="file" required class="form-control" value="@yield('editThumbnail')" name="thumbnail">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a href="/articles" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>
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