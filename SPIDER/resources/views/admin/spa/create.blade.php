@extends('layouts.master')

@section('title')
    <title>Spa Create</title>
@stop

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    @include('admin.partial.content-header', ['name' => 'Spa', 'key' => 'Create'])

  <p><a class="btn btn-primary" href="{{ url('/admin/spas') }}">Về danh sách</a></p>
  <div class="row">
      <div class="col-sm-8 offset-sm-2">
       <div>
         @if ($errors->any())
           <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
             </ul>
           </div><br />
         @endif
           <form method="post" action="{{ route('spas.store') }}">
               @csrf
               <div class="form-group">
                <label for="spa_name">Spa Name:</label>
                <input type="text" class="form-control" name="spa_name"/>
            </div>
               <div class="form-group">
                   <label for="spa_address">Spa Address:</label>
                   <input type="text" class="form-control" name="spa_address"/>
               </div>
               <div class="form-group">
                <label for="spa_phone">Spa Phone:</label>
                <input type="phone" class="form-control" name="spa_phone"/>
            </div>
               <button type="submit" class="btn btn-primary">Add Spa</button>
           </form>
       </div>
     </div>
     </div>
 </div>
   @endsection

