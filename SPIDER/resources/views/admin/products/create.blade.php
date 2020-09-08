@extends('admin::layouts.master')

@section('title')
    <title>Create Product</title>
@endsection

@section('js')
    @parent
    <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('pro_content');
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
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <form method="post" action="" enctype="multipart/form-data">
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
                                <input type="number" class="form-control" name="pro_number" placeholder="10" min="1" max="100">
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
                                <input type="text" class="form-control" name="pro_content" value="{{old('pro_content')}}">
                            </div>
                            <div class="form-group">
                                <label>Meta Title:</label>
                                <input type="text" class="form-control" name="pro_title_seo	" value="{{old('pro_title_seo', isset($hv_category->pro_title_seo) ? $hv_category->pro_title_seo : '')}}">
                            </div>
                            <div class="form-group">
                                <label>Description Sale:</label>
                                <input type="text" class="form-control" name="pro_description_seo" value="{{old('pro_description_seo',isset($hv_category->pro_description_seo)?$hv_category->pro_description_seo : '')}}">
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
                                <img src="https://www.globe2.net/wp-content/plugins/accelerated-mobile-pages/images/SD-default-image.png" id="out_img" style="height: 150px; width: auto">
                            </div>
                            <div class="form-group">
                                <label>Avatar:</label>
                                <input type="file" id="input_img" class="form-control-file" name="pro_avatar">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Product</button>
                            {{-- <input type="submit" name="submit" value="Add" class="btn btn-primary">
                            <a href="#" class="btn btn-danger">Cancel</a>
                            {{csrf_field()}} --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
