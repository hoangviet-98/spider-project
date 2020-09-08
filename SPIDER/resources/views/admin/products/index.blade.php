@extends('admin::layouts.master')

@section('title')
    <title>List Product</title>
@endsection

@section('js')
    @parent
    <script src="admincontrol/js/sweetAlert2/js/sweetalert2@9.js"></script>
    <script src="admincontrol/js/logInAdmin/js/list_product.js"></script>
    <script src="admincontrol/js/logInAdmin/js/list_product.js"></script>
@endsection

@section('css')
    @parent
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data tables</li>
            </ol>
        </section>
        <div class="back-home">
            <a style="margin: 19px;"
               href="{{ route('admin.get.create.product')}}" class=""> <i
                    class="fa fa-plus-circle"> </i> New Product</a>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title"></h3>

                            <div class="box-tools">
                                <form class="form-inline" action="" style="margin-bottom: 30px">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Name Product ..." name="name"
                                               value="{{ \Request::get('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <select name="cat" id="" class="form-control">
                                            <option value=""> Category</option>
                                            @if (isset($hv_category))
                                                @foreach($hv_category as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{\Request::get('cat') ==$category->id ? "selected='selected'" : "" }} > {{$category->cat_name}} </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Product Name</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th colspan=3>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hv_product as $product)
                            <tr>
                                <th>{{$product->id}}</th>
                                <th>{{$product->pro_name}}</th>
                                <th>{{$product->pro_number}}</th>

                                <td>{{$product->category->cat_name}}</td>

                                <td>
                                    <img src="{{pare_url_file($product->pro_avatar)}}" alt="" class="responsive">
                                </td>

                                <td>
                                    <a href="{{ route('admin.get.action.product', ['active', $product->id]) }}" class="label {{$product->getStatus($product->pro_active ) ['class'] }} ">

                                        {{$product->getStatus($product->pro_active) ['name'] }}

                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('admin.get.action.product', ['hot', $product->id]) }}" class="label {{$product->getHot($product->pro_hot ) ['class'] }} ">

                                        {{$product->getHot($product->pro_hot) ['name'] }}

                                    </a>
                                </td>
                                <td>

                                    <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px"
                                       href="{{ route('admin.get.edit.product',$product->id)}}"> <i class="fa fa-pencil"> </i></a>

                                    <a href=""
                                       style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px; color:red"
                                       data-url="{{ route('admin.get.delete.product', $product->id)}}"
                                       class="fa fa-trash-o action_delete"> </a>
                                    @csrf
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


@endsection

