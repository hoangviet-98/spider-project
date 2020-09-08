@extends('admin::layouts.master')

@section('title')
    <title>List Transaction</title>
@endsection

@section('js')
    @parent

    <script src="admincontrol/js/sweetAlert2/js/sweetalert2@9.js"></script>
    <script src="admincontrol/js/logInAdmin/js/list_product.js"></script>


@endsection

@section('css')
    @parent
@endsection

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <div class="content-wrapper">
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
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12"><br>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title"></h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right"
                                           placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Info</th>
                                    <th>Cart</th>
                                    <th>Spa Name</th>
                                    <th>Total price</th>
                                    <th>Status</th>
                                    <th colspan=3>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <th>{{$transaction->id}}</th>
                                        <td>
                                            <ul style="text-align: left">
                                                <li>Name: {{isset($transaction->users->name) ? $transaction->users->name : '[N\A]'}}</li>
                                                <li>Address: {{$transaction->tr_address}}</li>
                                                <li>Phone:{{$transaction->tr_phone}}</li>
                                            </ul>
                                        </td>
                                        <td>{{ '[N\A]'}}</td>

                                        <td>{{isset($transaction->spa->name) ? $transaction->spa->name : '[N\A]'}}</td>
                                        <td>{{$transaction->tr_total}}</td>

                                        <td>
                                            <a href="{{ route('admin.get.action.transaction', ['active', $transaction->id]) }}"
                                               class="label {{$transaction->getStatus($transaction->tr_status ) ['class'] }} ">

                                                {{$transaction->getStatus($transaction->tr_status) ['name'] }}

                                            </a>
                                        </td>
                                        {{--                                @if ($transaction->tr_status == 1)--}}
                                        {{--                                    <a href="#" class="label-success label">Done</a>--}}
                                        {{--                                    @else--}}
                                        {{--                                    <a href="#" class="label-default label">Writing</a>--}}
                                        {{--                                    @endif--}}
                                        </td>
                                        <td>
                                            <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px"
                                               class="js-preview-transaction"
                                               href="{{route('ajax.admin.transaction.detail', $transaction->id)}}"
{{--                                               onclick="showDetailOrder({{$transaction->id}})"--}}
                                                <i class="fa fa-eye "> </i></a>
                                            <a href=""
                                               style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px; color:red"
                                               data-url="{{ route('admin.get.delete.transaction', $transaction->id)}}"
                                               class="fa fa-trash-o action_delete"> </a>
                                            @csrf</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal -->
    <div class="modal fade fade" id="modal-preview-transaction">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng #<b class="transaction_id"></b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

