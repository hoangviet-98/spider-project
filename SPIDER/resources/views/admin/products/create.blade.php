@extends('layouts.master_admin')

@section('title')
    <title>Create Product</title>
@endsection

@section('js')
    @parent
    <script src="admincontrol/js/file_manage/file.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection

@section('css')
    @parent
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>
        <div class="back-home">
            <p><a style="margin: 19px"
                  href="{{ route('admin.get.list.product') }}">
                    <i class="fa fa-arrow-circle-left"> </i>
                    Về danh sách
                </a></p>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            @csrf
                            <div class="form-group">
                                <label for="pro_name">Product Name:</label>
                                <input type="text" class="form-control" name="pro_name" value="{{old('pro_name')}}"
                                       placeholder="Please input product name"
                                >
                                @if($errors->has('pro_name'))
                                    <span class="error-text">
                  {{$errors->first('pro_name')}}
                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Amount:</label>
                                <input type="number" class="form-control" name="pro_number" placeholder="10" min="1"
                                       max="100">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control"
                                       name="pro_description"
                                       value="{{old('pro_description')}}"
                                       placeholder="Please input product description"
                                >
                                @if($errors->has('pro_description'))
                                    <span class="error-text">
                  {{$errors->first('pro_description')}}
                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Content:</label>
                                <textarea name="pro_content" class="form-control my-editor" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Description Sale:</label>
                                <input type="text" class="form-control" name="pro_description_seo"
                                       value="{{old('pro_description_seo',isset($hv_category->pro_description_seo)?$hv_category->pro_description_seo : '')}}">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="pro_category_id">
                                    <option value="">---Please choose Category---</option>
                                    @foreach ($hv_category as $cat_id)
                                        <option value="{{ $cat_id->id}}">{{$cat_id->cat_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" name="pro_price" value="{{old('pro_price')}}"
                                       placeholder="Please input product price"
                                >
                                @if($errors->has('pro_price'))
                                    <span class="error-text">
                  {{$errors->first('pro_price')}}
                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <img
                                    src="https://www.globe2.net/wp-content/plugins/accelerated-mobile-pages/images/SD-default-image.png"
                                    id="out_img" style="height: 150px; width: auto">
                            </div>
                            <div class="form-group">
                                <label>Avatar:</label>
                                <input type="file" id="input_img" class="form-control-file" name="pro_avatar">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                            {{-- <input type="submit" name="submit" value="Add" class="btn btn-primary">
                            <a href="#" class="btn btn-danger">Cancel</a>
                            {{csrf_field()}} --}}
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
