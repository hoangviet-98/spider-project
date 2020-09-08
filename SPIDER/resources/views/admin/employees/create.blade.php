@extends('layouts.master')

@section('title')
    <title>Add Employee</title>
@endsection

@section('js')
    @parent
@endsection

@section('css')
    @parent
@endsection

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @include('admin.partial.content-header', ['name' => 'Employee', ' ' ,'key' => 'Add'])
        </section>
        <div class="back-home">
        <p><a style="margin: 19px"
              href="{{ url('/admin/employees') }}">
                <i class="fa fa-arrow-circle-left" > </i>
                Về danh sách</a></p>
        </div>
        <section class="content">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
            <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                    @csrf
                        <div class="form-group">
                            <label for="emp_name">Name:</label>
                            <input type="text" class="form-control" name="emp_name"/>
                        </div>
                        <div class="form-group">
                            <label for="emp_address">Address:</label>
                            <input type="text" class="form-control" name="emp_address"/>
                        </div>
                        <div class="form-group">
                            <label for="emp_card">Image Card:</label>
                            <input type="file" id="emp_card" class="form-control-file" name="emp_card">
                        </div>
                        <div class="form-group">
                            <label for="emp_phone">Phone:</label>
                            <input type="text" class="form-control" name="emp_phone"/>
                        </div>
                        <div class="form-group">
                            <label for="emp_salary">Salary:</label>
                            <input type="text" class="form-control" name="emp_salary"/>
                        </div>
                        <div class="form-group">
                            <label>Spa</label>
                            <select class="form-control" name="spa_id">
                                <option value="">---Please choose Spa---</option>
                                @foreach ($hv_spa as $spa_id)
                                    <option value="{{ $spa_id->id}}">{{$spa_id->spa_name}} </option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Employee</button>
            </form>
            </div>
        </div>
        </section>
    </div>
@endsection
