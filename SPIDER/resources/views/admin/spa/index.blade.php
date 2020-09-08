@extends('layouts.master')

@section('title')
    <title>Spa List</title>
@stop

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partial.content-header', ['name' => 'Spa', 'key' => 'List'])
        <div class="row">
            <div>
                <a style="margin: 19px;"
                   href="{{ route('spas.create')}}" class=""> <i
                        class="fas fa-plus-circle"> </i> New Spa</a>
            </div>
            <div class="col-sm-11">
                <table class="table table-bordered" style="text-align: center; margin-left: 50px">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Spa Name</th>
                        <th>Spa Address</th>
                        <th>Spa Phone</th>
                        <th colspan=3>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hv_spa as $spa)
                        <tr>
                            <th>{{$spa->id}}</th>
                            <td>{{$spa->spa_name}}</td>
                            <td>{{$spa->spa_address}}</td>
                            <td>{{$spa->spa_phone}}</td>
                            <td>
                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px"
                                   href="{{ route('spas.edit',$spa->id)}}"> <i class="fas fa-pen"> </i></a>

                                <a href=""
                                   style="padding: 5px 10px; border: 1px solid #eee; font-size: 12px; color:red"
                                   data-url="{{ route('spas.delete', $spa->id)}}"
                                   class="fas fa-trash-alt action_delete"> </a>
                                @csrf
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
