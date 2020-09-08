@extends('admin::layouts.master')

@section('title')
    <title>Edit Product</title>
@endsection

@section('js')
    @parent
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/editor.js"></script>
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
                    Về danh sách</a></p>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-3">Update a Product</h1>
                    <form method="post" action="{{ route('admin.get.update.product', $hv_product->id) }}" enctype="multipart/form-data">

                    @csrf
                        <div class="form-group">

                            <label for="pro_name">Name:</label>
                            <input type="text" class="form-control" name="pro_name"
                                   value="{{ $hv_product->pro_name }}"/>
                            @if($errors->has('pro_name'))
                                <span class="error-text">
{{$errors->first('pro_name')}}
</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control"
                                   name="pro_description"
                                   value="{{ $hv_product->pro_description }}"/>
                            @if($errors->has('pro_description'))
                                <span class="error-text">
                  {{$errors->first('pro_description')}}
                </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Content:</label>
                            <input type="text" class="form-control" name="pro_content" value="{{ $hv_product->pro_content }}"/>
                        </div>

                        <div class="form-group">
                            <label>Meta Title:</label>
                            <input type="text" class="form-control" name="pro_title_seo	" value="{{ $hv_product->pro_title_seo }}")}}>
                        </div>
                        <div class="form-group">
                            <label>Description Sale:</label>
                            <input type="text" class="form-control" name="pro_description_seo" value="{{ $hv_product->pro_description_seo }}">
                        </div>

                        <div class="form-group">
                            <label for="pro_price">Price:</label>
                            <input type="text" class="form-control" name="pro_price"
                                   value="{{ $hv_product->pro_price }}"/>
                            @if($errors->has('pro_price'))
                                <span class="error-text">
{{$errors->first('pro_price')}}
</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <option value="">---Please choose Category---</option>
                            @if(isset($hv_category))
                                <select class="form-control" name="pro_category_id">
                                    @foreach ($hv_category as $cat_id)
                                        <option value="{{ $cat_id->id}}">{{$cat_id->cat_name}} </option>
                                    @endforeach
                                    @endif
                                </select>
                        </div>

                        <div class="form-group">
                            <label>Avatar:</label>
                            <input type="file" class="form-control-file" name="pro_avatar" value="{{ $hv_product->pro_avatar }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
